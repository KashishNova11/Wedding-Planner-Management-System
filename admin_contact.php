<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }
    include "config.php";
    $query = "SELECT * FROM `contact_us`";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Messages 
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .navbar-brand{
                color: white;
                background-color: #ff1d8e;
                text-decoration: none;
                font-size: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-left: 250px;
            }

            .navbar-brand:hover, .nvabr-brand:focus{
                color: white;
            }

            .btn-back{
                color: #ff1d8e;
                background-color: white;
                text-decoration: none;
                font-size: 17px;
                margin-right: 200px;
                padding-top: 7px;
                padding-bottom: 7px;
                padding-right: 20px;
                padding-left: 20px;
                border-radius: 5px;
                border: 1px solid #ff1d8e;
            }

            .btn-back:hover, .btn-back:focus{
                color: white;
                background-color: grey;
            }

            .card-1{
                width: 1400px;
                margin-left: 65px;
                margin-top: 30px;
                border-radius: 5px;
            }

            .card-1 .card-header{
                color: #008631;
                background-color: white;
            }

            .card-1 label{
                color: black
            }

            .card-1 .card-title{
                color: #ff1d8e;
            }

            .card-1 .card-text{
                color: grey;
            }

            .btn-profile{
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
            }

            .btn-profile:hover, .btn-profile:focus{
                color: #008631;
                background-color: white;
            }

            .btn-delete{
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

            .btn-delete:hover, .btn-delete:focus{
                color: #031273;
                background-color: white;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    Messages From Clients
                </a>
                <a href="admin_home.php" class="btn-back">
                    Back
                </a>
            </div>
        </nav>
        <?php
            $i = 0;
            while($data = mysqli_fetch_assoc($result))
            {
                if($i == 0)
                {
        ?>
        <div class="card-1 mb-3">
            <h5 class="card-header">
                <label for="name" class="name">
                    <?php
                        echo $data['name'];
                    ?>
                </label>
            </h5>
            <div class="card-body text-dark">
                <h6 class="card-title">
                    <?php
                        echo $data['email'];
                    ?>
                    -
                    <?php
                        echo $data['contact'];
                    ?>
                </h6>
                <p class="card-text">
                    <?php
                        echo $data['message'];
                    ?>
                </p>
                <a href="admin_client_profile.php" class="btn-profile">
                    View Profile
                </a>
                <a href="delete_contact.php?id=<?php echo $data['id']; ?>" class="btn-delete">
                    Delete
                </a>
            </div>
        </div>

        <?php
                }
                else
                {
        ?>

<div class="card-1 mb-3">
            <h5 class="card-header">
                <label for="name" class="name">
                    <?php
                        echo $data['name'];
                    ?>
                </label>
            </h5>
            <div class="card-body text-dark">
                <h6 class="card-title">
                    <?php
                        echo $data['email'];
                    ?>
                    -
                    <?php
                        echo $data['contact'];
                    ?>
                </h6>
                <p class="card-text">
                    <?php
                        echo $data['message'];
                    ?>
                </p>
                <a href="admin_client_profile.php" class="btn-profile">
                    View Profile
                </a>
                <a href="delete_contact.php?id=<?php echo $data['id']; ?>" class="btn-delete">
                    Delete
                </a>
            </div>
        </div>

        <?php
                } 
                $i++;
            }
        ?>  
    </body>
</html>