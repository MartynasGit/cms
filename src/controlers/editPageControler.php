<?php

use Repository\PageRepository;

session_start();

require_once "bootstrap.php";

if (isset($_GET['editPage'])) {
    $pageId = $_GET['editPage'];
}
$pageRepo = new PageRepository($entityManager);
$currentPage = $pageRepo->getById($pageId);

//Update
if(isset($_POST['edit'])){
    $page = $entityManager->find('Models\Page', $pageId);
    $page->setTitle($_POST['titleName']);
    $page->setContent($_POST['content']);
    $entityManager->flush();
    redirect_to_root();
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "login") {
    require_once "src/views/editPage.php";
} else {
    require_once "src/views/login.php";
}
