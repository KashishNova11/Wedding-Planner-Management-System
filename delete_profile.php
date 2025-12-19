<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }
    include "config.php";
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query="DELETE FROM `clients` WHERE `id`='$id'";
        $result=mysqli_query($con,$query);
        if(!$result)
        {
            die("query failed.".mysqli_error());
        }
        else
        {
            header("location:all_clients.php?profile_delete_msg=Profile Deleted succesfully.");
        }
    }
?>