<?php
    session_start();
    include "config.php";
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Bookings
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .total{
                color: #ff1d8e;
            }

            .label{
                color: black;
                margin-top: 10px;
                font-size: 25px;
                margin-bottom: 20px;
            }

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
                width: 600px;
                margin-left: 150px;
                margin-top: 50px;
                border-radius: 5px;
            }

            .card-2{
                width: 600px;
                margin-left: 50px;
                margin-top: 50px;
                border-radius: 5px;
            }

            .card-header{
                color: white;
                background-color: #031273;
                width: 600px;
                margin-left: -12.5px;
            }

            .details{
                color: white;
                background-color: #008631;
                text-decoration: none;
                border: 1px solid #008631;
                border-radius: 5px;
                padding-top: 7px;
                padding-bottom: 7px;
                padding-right: 20px;
                padding-left: 20px;
            }

            .details:hover, .details:focus{
                color: #008631;
                background-color: white;   
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    All Booking
                </a>
                <a href="admin_home.php" class="btn-back">
                    Back
                </a>
            </div>
        </nav>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="card-1 mb-3">
                <h4 class="card-header">
                    Booking List
                </h4>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php
                        $query = "SELECT * FROM `b_banquet_halls`";
                        $result = mysqli_query($con, $query);

                        if($total = mysqli_num_rows($result))
                        {
                            echo "<label class='label'> Total Booking : </label> <label class='total'> $total </label>";
                        }

                        else
                        {
                            echo "<h4 class='mb-0' style='padding-bottom: 25px;'> Total Booking : 0 </h4>";
                        }
                    ?>  
                    </h5>
                    <a href="banquet_halls_details.php" class="details">
                        View Booking
                    </a>
                </div>
            </div>
            <div class="card-2 mb-3">
                <h4 class="card-header">
                    Lawns / Farmhouses Booking
                </h4>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php
                        $query = "SELECT * FROM `b_lawns_farmhouses`";
                        $result = mysqli_query($con, $query);

                        if($total = mysqli_num_rows($result))
                        {
                            echo "<label class='label'> Total Booking : </label> <label class='total'> $total </label>";
                        }

                        else
                        {
                            echo "<h4 class='mb-0' style='padding-bottom: 25px;'> Total Booking : 0 </h4>";
                        }
                    ?>  
                    </h5>
                    <a href="lawns_farmhouses_details.php" class="details">
                        View Booking
                    </a>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="card-1 mb-3">
                <h4 class="card-header">
                    Wedding Hotels Booking
                </h4>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php
                        $query = "SELECT * FROM `b_hotels`";
                        $result = mysqli_query($con, $query);

                        if($total = mysqli_num_rows($result))
                        {
                            echo "<label class='label'> Total Booking : </label> <label class='total'> $total </label>";
                        }

                        else
                        {
                            echo "<h4 class='mb-0' style='padding-bottom: 25px;'> Total Booking : 0 </h4>";
                        }
                    ?>  
                    </h5>
                    <a href="hotels_details.php" class="details">
                        View Booking
                    </a>
                </div>
            </div>
            <div class="card-2 mb-3">
                <h4 class="card-header">
                    Wedding Resorts Booking
                </h4>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php
                        $query = "SELECT * FROM `b_resorts`";
                        $result = mysqli_query($con, $query);

                        if($total = mysqli_num_rows($result))
                        {
                            echo "<label class='label'> Total Booking : </label> <label class='total'> $total </label>";
                        }

                        else
                        {
                            echo "<h4 class='mb-0' style='padding-bottom: 25px;'> Total Booking : 0 </h4>";
                        }
                    ?>  
                    </h5>
                    <a href="resorts_details.php" class="details">
                        View Booking
                    </a>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.js"></script> 
    </body>
</html>