<?php

require "bootstrap.php";
use Models\Page;
use Repository\PageRepository;

$pageRep = new PageRepository($entityManager);
$pages = $pageRep->getAll();

if (isset($_GET['editPage'])) {
    $pageId = $_GET['editPage'];
    $currentPage = $pageRep->getById($pageId);
}

// Helper functions
function redirect_to_root()
{
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// LOGOUT LOGIC
if (isset($_GET['logout'])) {
    session_destroy();
    session_start();
    redirect_to_root();
}
// LOGIN LOGIC
$loginErrorMessage = '';
if (isset($_POST['login'])) {
    if ($_POST['userName'] == 'Admin' && $_POST['password'] == 'Admin') {
        $_SESSION['logged_in'] = 'login';
        $_SESSION['userName'] = $_POST['userName'];
    } else {
        $loginErrorMessage = 'Wrong username or password';
    }
}
// UPDATE LOGIC
if (isset($_POST['edit'])) {
    $page = $pageRep->getById($pageId);
    $page->setTitle($_POST['titleName']);
    $page->setContent($_POST['content']);
    $entityManager->flush();
    $successfulMessage = "Updated succsesfully!";
}
// DELETE LOGIC
if (isset($_GET['deletePage'])) {
    $page = $pageRep->getById($_GET['deletePage']);
    $entityManager->remove($page);
    $entityManager->flush();
    redirect_to_root();
}

// CREATE NEW PAGE
if (isset($_POST['createPage'])) {
    $page = new Page();
    $page->setTitle($_POST['createPage']);
    $page->setContent(" ");
    $entityManager->persist($page);
    $entityManager->flush();
    redirect_to_root();
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "login") {
    switch ($case) {
        case "admin":
            require_once "src/views/admin.php";
            break;
        case "adminView":
            require_once "src/views/adminView.php";
            break;
        case "adminEdit":
            require_once "src/views/editPage.php";
    }
} else {
    require_once "src/views/login.php";
}
