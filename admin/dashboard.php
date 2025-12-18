<?php
session_start();

if ($_SESSION['username']) {
    $pagetitle = "Dashboard";
    include 'init.php';
    include $tpl.'footer.php';

} else {
    header('location: index.php');
    exit();
}

?>