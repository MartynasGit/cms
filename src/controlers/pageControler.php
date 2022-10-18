<?php
require_once "bootstrap.php";

use Repository\PageRepository;

if (isset($_GET['id'])) {
    $pageId = $_GET['id'];
} else {
    $pageId = 1;
}

$pageRepo = new PageRepository($entityManager);
$currentPage = $pageRepo->getById($pageId);
$pages = $pageRepo->getAll();


require_once "src/views/pages.php";
