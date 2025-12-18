<?php
//include 'connect.php';
$tpl = "includes/template/"; // Templates Directory
$css = "layout/css/"; // css Directory
$js = "layout/js/"; //Javascript Directory
$language = "includes/languages/"; //languages Directory
$func = "includes/functions/";
// here important File
include $language."ar.php";
include $tpl."header.php";
include $func."functions.php";

//include navbar on all page
if (!isset($nonavbar)) {
    include $tpl."navbar.php";
}



?>