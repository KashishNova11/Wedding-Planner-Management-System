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
        $query="DELETE FROM `contact_us` WHERE `id`='$id'";
        $result=mysqli_query($con,$query);
        if(!$result)
        {
            die("query failed.".mysqli_error());
        }
        else
        {
            header("location:admin_contact.php?message_delete_msg=Message Deleted succesfully.");
        }
    }
?>