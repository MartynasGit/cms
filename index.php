<?php 
session_start();
$base_url = "http://localhost/cms";
$prefix = '/cms';
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
        $case = "admin";
        require __DIR__ . '/src/controlers/adminControler.php';
        break;
    case $prefix . '/Admin/View/':
        $case = "adminView";
        require __DIR__ . '/src/controlers/adminControler.php';
        break;
    case $prefix . '/Admin/Edit/':
        $case = "adminEdit";
        require __DIR__ . '/src/controlers/adminControler.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}
