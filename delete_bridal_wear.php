<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }

    include "config.php";
    $id = $_GET['id'];
    $query = "DELETE FROM `bridal_wear` WHERE `id` = '$id'";
    $result = mysqli_query($con, $query);

    if(!$result)
    {
        die("Query Failled...".mysqli_error());
    }

    else
    {
        $img = $_POST['img'];
        unlink("img/".$img);
        header("location:admin_bridal_wear.php?delete_msg=Data Deleted Successfully...");
    }
?>  