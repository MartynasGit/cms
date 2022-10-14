<?php
require_once "bootstrap.php";
$url = $_SERVER['REQUEST_URI'];

use Repository\PageRepository;

if (isset($_GET['id'])) {
    $pageId = $_GET['id'];
} else {
    $pageId = 1;
}
$pageRepo = new PageRepository($entityManager);
$currentPage = $pageRepo->getById($pageId);
$pages = $pageRepo->getAll();

//Calling pages view part
require_once "src/views/pages.php";
