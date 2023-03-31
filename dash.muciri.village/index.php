<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['login'])) {
    $username = ($_POST['username']);
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    // print_r($sql);
    // exit();
    $query = $dbh->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $_SESSION['alogin'] = $_POST['username'];
        echo "<script> location.href='blog/blog.php'; </script>";
        // echo "<script type='text/javascript'> document.location ='announcements.php; </script>";
    } else {
        echo "<script>alert('Invalid Password or Email!!');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login | Muciri Village</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="../img/favi.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="../img/logo-login.png" alt="" class="img-fluid mb-4">
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <form class="pt-3" role="form" method="post">
                            <h4 class="mb-3 f-w-400">Login</h4>
                            <hr>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Email address" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <button class="btn btn-block btn-primary mb-4" name="login">Login</button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<!-- <script src="assets/js/pcoded.min.js"></script> -->



</body>

</html>