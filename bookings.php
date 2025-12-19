<?php
    session_start();
    include "config.php";
    $id = $_SESSION['id'];
    if(!isset($id))
    {
        header("location:admin_login.php");
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
            Booking Successfull
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .card{
                width: 1200px;
                margin-left: 165px;
                margin-top: 200px; 
                margin-bottom: 20px;
            }

            .card-text{
                font-size: 21px;
            }

            .card-header{
                color: white;
                background-color: #ff1d8e;
            }

            .card-title{
                color: #008631;
                margin-top: 20px;
                padding-bottom: 20px;
            }

            .card-footer{
                color: white;
                background-color: #ff1d8e;
                font-size: 18px;
            }
            
            .home{
                color: white;
                background-color: #031273;
                text-decoration: none;
                font-size: 18px;
                margin-left: 720px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-right: 40px;
                padding-left: 40px;
                border: 1px solid #031273;
                border-radius: 5px;
            }

            .home:hover, .home:focus{
                color: #031273;
                background-color: white;
            }

            .name{
                color: #031273;
                font-size: 30px;
                margin-bottom: 20px;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="card text-center">
            <h1 class="card-header">
                Successfully Booked!!!
            </h1>
            <div class="card-body">
                <h4 class="card-title">
                    <label for="name" class="name">
                        Hi, <?php echo $data['name']; ?>
                    </label>
                    <br>
                    All the booking information will be sent to you in your mail id, within 2 days.
                    <br>
                    If you face any problem regarding booking, you can contact us through the number or mail id.
                </h4>
            </div>
            <div class="card-footer">
                7284015174 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp wedmegood@gmail.com
            </div>
        </div>
        <a href="client_home.php" class="home">
            Ok
        </a>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
