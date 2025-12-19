<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }

    include "config.php";
    $id = $_GET['id'];
    $query = "DELETE FROM `music_dance` WHERE `id` = '$id'";
    $result = mysqli_query($con, $query);

    if(!$result)
    {
        die("Query Failled...".mysqli_error());
    }

    else
    {
        $img = $_POST['img'];
        unlink("img/".$img);
        header("location:admin_music_dance.php?delete_msg=Data Deleted Successfully...");
    }
?>  