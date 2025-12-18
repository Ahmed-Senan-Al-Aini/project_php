<?php
$dsn = "mysql:host=localhost;dbname='ali";
$user = "root";
$pass = "";

try {
    $con = new PDO($dsn, $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " Succsessful connect";

} catch (PDOException $e) {
    echo "Filled To connect " . $e->getMessage();
}


?>