<?php
session_start();
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
//LOGIN LOGIC
$loginErrorMessage = '';
if (isset($_POST['login'])) {
    if ($_POST['userName'] == 'Admin' && $_POST['password'] == 'Admin') {
        $_SESSION['logged_in'] = 'login';
        $_SESSION['userName'] = $_POST['userName'];
    } else {
        $loginErrorMessage = 'Wrong username or password';
    }
}
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "login") {
    require_once "src/views/admin.php";
} else {
    require_once "src/views/login.php";
}
