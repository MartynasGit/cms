<?php
$url = $_SERVER['REQUEST_URI'];
$prefix = '/cms';
switch ($url) {
    case $prefix . '/' . (empty($_SERVER['QUERY_STRING']) ? '' : '?' . $_SERVER['QUERY_STRING']):
        require __DIR__ . '/src/views/pages.php';
        break;
    case $prefix . '' . (empty($_SERVER['QUERY_STRING']) ? '' : '?' . $_SERVER['QUERY_STRING']):
        require __DIR__ . '/src/views/pages.php';
        break;
    case $prefix . '/Pages' . (empty($_SERVER['QUERY_STRING']) ? '' : '?' . $_SERVER['QUERY_STRING']):
        require __DIR__ . '/src/views/pages.php';
        break;
    case $prefix . '/Content' . (empty($_SERVER['QUERY_STRING']) ? '' : '?' . $_SERVER['QUERY_STRING']):
        require __DIR__ . '/src/views/content.php';
        break;
    case $prefix . '/Admin' . (empty($_SERVER['QUERY_STRING']) ? '' : '?' . $_SERVER['QUERY_STRING']):
        require __DIR__ . '/src/views/admin.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}
