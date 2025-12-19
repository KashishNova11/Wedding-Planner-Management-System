<?php
    session_start();
    include "config.php";
    $id = $_SESSION['id'];
    if(!isset($id))
    {
        header("location:client_login.php");
    }
    $query = "SELECT * FROM `clients` WHERE `id` = '$id'";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Profile
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .navbar-brand{
                font-size: 33px;
                margin-left: 200px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .card{
                width: 1200px;
                margin-left: 160px;
                margin-top: 50px;
                border: 1px solid rgba(0,0,0,.125);
                border-radius: 10px;
            }

            .card .card-header{
                color: white;
                background-color: #031273;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                padding-left: 500px;
                padding-top: 15px;
                padding-bottom: 15px;
                font-size: 31px;
            }

            .btn-back{
                color: #ff1d8e;
                background-color: white;
                text-decoration: none;
                font-size: 17px;
                padding-top: 7px;
                padding-bottom: 7px;
                padding-right: 20px;
                padding-left: 20px;
                border-radius: 5px;
                border: 1px solid #ff1d8e;
                margin-right: 200px;
            }

            .btn-back:hover, .btn-back:focus{
                color: white;
                background-color: grey;
            }

            .btn-edit{
                color: white;
                background-color: #008631;
                margin-right: 10px;
                text-decoration: none;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-right: 30px;
                padding-left: 30px;
                border-radius: 5px;
                border: 1px solid #008631;
                margin-left: 1025px;
            }

            .btn-edit:hover, .btn-edit:focus{
                color: #008631;
                background-color: white;
            }

            .btn-change{
                color: white;
                background-color: #031273;
                text-decoration: none;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-right: 30px;
                padding-left: 30px;
                border-radius: 5px;  
                border: 1px solid #031273;              
            }

            .btn-change:hover, .btn-change:focus{
                color: #031273;
                background-color: white;
            }

            .list-group{
                width: 1200px;
                margin-top: 50px;
                margin-left: 165px;
                margin-bottom: 20px;
            }

            .list-group .list-group-item-details{
                color: white;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                background-color: #031273;
                padding-top: 7px;
                padding-bottom: 7px;
                padding-left: 500px;
            }

            .name{
                color: #ff1d8e;
                margin-top: 10px;
                font-size: 24px;
            }

            .name-p{
                color: grey;
                font-size: 18px;
                margin-left: 10px;
                margin-bottom: 10px;
            }

            .email{
                color: #ff1d8e;
                margin-top: 10px;
                font-size: 24px;
            }

            .email-p{
                color: grey;
                text-decoration: underline;
                font-size: 18px;
                margin-left: 10px;
                margin-bottom: 10px;
            }

            .contact{
                color: #ff1d8e;
                margin-top: 10px;
                font-size: 24px;
            }

            .contact-p{
                color: grey;
                font-size: 18px;
                margin-left: 10px;
                margin-bottom: 10px;
            }

            .address{
                color: #ff1d8e;
                margin-top: 10px;
                font-size: 24px;
            }

            .address-p{
                color: grey;
                font-size: 18px;
                margin-left: 10px;
                margin-bottom: 10px;
            }

        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    Hi, 
                    <?php
                        echo $data['name'];
                    ?>
                </a>
                <a href="client_home.php" class="btn-back">
                    Back
                </a>
            </div>
        </nav>
        
        <ul class="list-group">
            <li class="list-group-item-details">
                <h2>
                    Your Details
                </h2>
            </li>
            <li class="list-group-item">
                <h5 class="name">
                    Name
                </h5>
                <label for="name-p" class="name-p">
                    <?php
                        echo $data['name'];
                    ?>
                </label>
            </li>
            <li class="list-group-item">
                <h5 class="email">
                    Email
                </h5>
                <label for="email-p" class="email-p">
                    <?php
                        echo $data['email'];
                    ?>
                </label>
            </li>
            <li class="list-group-item">
                <h5 class="contact">
                    Contact
                </h5>
                <label for="contact-p" class="contact-p">
                    <?php
                        echo $data['contact'];
                    ?>
                </label>
            </li>
            <li class="list-group-item">
                <h5 class="address">
                    Address
                </h5>
                <label for="address-p" class="address-p">
                    <?php
                        echo $data['address'];
                    ?>
                </label>
            </li>
        </ul>

        <a href="edit_profile.php" class="btn-edit">
            Edit Profile
        </a>
        <a href="client_change_password.php" class="btn-change">
            Change Password
        </a>
    </body>
</html>