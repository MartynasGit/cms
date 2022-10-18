<?php

$prefix = '/cms'; //Change if folders directory is not matching from htdocs folder.
$base_url = "http://localhost" . $prefix;

$source = $_SERVER['REQUEST_URI'];
if (isset($_SERVER['REDIRECT_URL']))
    $source = $_SERVER['REDIRECT_URL'];

$url = substr($source, -1, 1) === '/' ? $source : $source . '/';

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
    case $prefix . '/admin/':
        require __DIR__ . '/src/controlers/adminControler.php';
        break;
    case $prefix . '/Admin/View/':
        require __DIR__ . '/src/controlers/adminViewControler.php';
        break;
    case $prefix . '/Admin/Edit/':
        require __DIR__ . '/src/controlers/editPageControler.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}
