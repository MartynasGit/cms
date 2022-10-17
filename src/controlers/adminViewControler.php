<?php
session_start();
require_once "bootstrap.php";
use Repository\PageRepository;

$pageRepo = new PageRepository($entityManager);
$pages = $pageRepo->getAll();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "login") {
    require_once "src/views/adminView.php";
} else {
    require_once "src/views/login.php";
}
