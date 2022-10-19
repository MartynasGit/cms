<?php

use Repository\PageRepository;


if (isset($_GET['editPage'])) {
    $pageId = $_GET['editPage'];
}
$pageRep = new PageRepository($entityManager);
$currentPage = $pageRep->getById($pageId);

// UPDATE LOGIC

if (isset($_GET['editPage'])) {
    $pageId = $_GET['editPage'];
    $currentPage = $pageRep->getById($pageId);
}

if (isset($_POST['edit'])) {
    $pageRep->editPage($pageId, $_POST['titleName'], $_POST['content']);
    $successfulMessage = "Updated succsesfully!";
}
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "login") {
    require_once "src/views/editPage.php";
} else {
    require_once "src/views/login.php";
}
