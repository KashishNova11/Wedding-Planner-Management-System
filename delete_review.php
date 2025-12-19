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
        $query="DELETE FROM `reviews` WHERE `id`='$id'";
        $result=mysqli_query($con,$query);
        if(!$result)
        {
            die("query failed.".mysqli_error());
        }
        else
        {
            header("location:admin_review.php?review_delete_msg=Review Deleted succesfully.");
        }
    }
?>