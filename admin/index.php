<?php

session_start();
include "init.php";
$nonavbar = '';
$pagetitle = "login";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //set data for variables

    $username = $_POST['user'];
    $password = $_POST['password'];
    $hashpassword = sha1($password);

    // Select from database

    $stmt = $con->prepare(SELECT userId,username, password FROM users WHERE username = ? and hashpassword = ? and grupe_id = 1
    limit 1);

    $stmt->execute(array($username, $hashpassword));
    $row=$stmt->fetch();
    $count = $stmt->rowCount();
    
    if ($count > 0) {
        $_SESSION['username'] = $$username;
        $_SESSION['id']=$row['userId'];
        header('location: dashboard.php');
        exit();
    }

}

?>

<?php

//echo lang('MASSAGE');

?>
<div class="center-margin">
    <div class="container">
        <h3 class="text-center"> Admin Login</h3>

        <form class="login text-center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <input class="form-control input-lg " type="text" name="user" placeholder="Enter Username" autocomplete="off">
            <input class="form-control input-lg" type="password" name="password" placeholder="Enter Password">
            <input type="submit" class="btn btn-primary btn-block" value="login">

        </form>
    </div>
</div>
<?php
include $tpl."footer.php";
?>