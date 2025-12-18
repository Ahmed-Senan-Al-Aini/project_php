<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $param = session_get_cookie_params();
    setcookie(session_name(), ' ', time()-5000, $param['path'], $param['domain'], $param['secure'], $param['httponly']);
}

session_destroy();

header('location: index.php');
exit();
?>