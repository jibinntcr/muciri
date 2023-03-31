<?php

session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {
    $idE = $_GET["idE"];
    $idD = $_GET["idD"];
    if (!empty($idE)) {
        $status = '0';
        $sql = "UPDATE  blog SET status='$status' WHERE id = '$idE'";
        // print_r($sql);
        // exit();
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0) {
            // echo '<script>alert("Post disabled")</script>';
            echo '<script>window.location = "blog.php";</script>';
        } else {
            echo '<script>alert("Something went wrong please try again later")</script>';
            echo '<script>window.location = "blog.php";</script>';
        }
    } elseif (!empty($idD)) {
        $status = '1';
        $sql = "UPDATE  blog SET status='$status' WHERE id = '$idD'";
        // print_r($sql);
        // exit();
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0) {
            // echo '<script>alert("Post Enabled")</script>';
            echo '<script>window.location = "blog.php";</script>';
        } else {
            echo '<script>alert("Something went wrong please try again later")</script>';
            echo '<script>window.location = "blog.php";</script>';
        }
    }
}
