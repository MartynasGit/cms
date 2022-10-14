<?php
$base_url = 'http://localhost/cms';

$source = $_SERVER['REQUEST_URI'];

if (isset($_SERVER['REDIRECT_URL']))
    $source = $_SERVER['REDIRECT_URL'];

$url = substr($source, -1, 1) === '/' ? $source : $source . '/';

$prefix = '/cms';
switch ($url) {
    case $prefix . '/':
        require __DIR__ . '/src/controlers/pageControler.php';
        break;
    case $prefix . '/Pages/':
        require __DIR__ . '/src/controlers/pageControler.php';
        break;
    case $prefix . '/Admin/':
        require __DIR__ . '/src/controlers/adminControler.php';
        break;
    case $prefix . '/Admin/View/':
        require __DIR__ . '/src/controlers/adminViewControler.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}
