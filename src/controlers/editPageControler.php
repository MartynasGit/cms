<?php

use Repository\PageRepository;

$pageRep = new PageRepository($entityManager);

// UPDATE LOGIC
if (isset($_GET['editPage'])) {
    $pageId = $_GET['editPage'];
    $currentPage = $pageRep->getById($pageId);
}

if (isset($_POST['edit'])) {
    $pageRep->editPage($pageId, $_POST['titleName'], $_POST['content']);
    $editMessage = '<p class="text-success">Updated succsesfully!</p>';
}
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "login") {
    require_once "src/views/editPage.php";
} else {
    require_once "src/views/login.php";
}

