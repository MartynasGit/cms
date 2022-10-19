<?php

use Repository\PageRepository;

$pageRep = new PageRepository($entityManager);
$pages = $pageRep->getAll();

// ADMIN VIEW 
if (isset($_POST['viewPage'])) {
    $selectedViewPage = $_POST['viewPage'];
} else {
    $selectedViewPage = 1;
}

$currentPage = $pageRep->getById($selectedViewPage);

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "login") {
    require_once "src/views/adminView.php";
} else {
    require_once "src/views/login.php";
}
