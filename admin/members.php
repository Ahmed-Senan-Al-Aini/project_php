<?php
session_start();

if ($_SESSION['username']) {
    $pagetitle = "Dashboard";
    include 'init.php';
    $do = isset($_GET['do'])?$_GET['do']:"manage";
    if ($do == "manage") {

        // here page manger

    } elseif ($do == "edit") {

        // here page edit
        
    }

    include $tpl.'footer.php';
} else {
    header('location: index.php');
    exit();
}

?>