<?php
define('TITLE', 'technician');
define('PAGE', 'technician');
include('../assets/includes/header.php');
include('../db_connection.php');
session_start();
if ($_SESSION['is_adminlogin']) {
    $rEmail = $_SESSION['aEmail'];
} else {
    header('Location: /bcaivproject/requester/requesterlogin.php');
}