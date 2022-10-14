<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "login") {
    require_once "src/views/adminView.php";
} else {
    require_once "src/views/login.php";
}