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
            Hotels Booking
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

            .card{
                width: 1200px;
                margin-left: 165px;
                border-radius: 5px;
                margin-top: 20px;
            }

            .card-header{
                color: white;
                background-color: #008631;
            }

            .email{
                color: #ff1d8e;
            }

            .email-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
            }

            .contact{
                color: #ff1d8e;
            }

            .contact-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
            }

            .v-name{
                color: #ff1d8e;
            }

            .v-name-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
            }

            .f-date{
                color: #ff1d8e;
            }

            .f-date-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
            }

            .t-date{
                color: #ff1d8e;
            }

            .t-date-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
            }
            .f-time{
                color: #ff1d8e;
            }

            .f-time-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
            }

            .t-time{
                color: #ff1d8e;
            }

            .t-time-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
            }

            .space{
                color: #ff1d8e;
            }

            .space-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
            }

            .function{
                color: #ff1d8e;
            }

            .function-1{
                color: grey;
                margin-left: 5px;
                font-size: 18px;
                margin-bottom: 20px;
            }

            hr{
                width: 1100px;
                margin-left: 210px;
                margin-top: 30px;
                margin-bottom: 30px;
                padding-top: 3px;
            }

            .delete{
                color: white;
                background-color: #031273;
                text-decoration: none;
                font-size: 18px;
                padding-right: 30px;
                padding-left: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
                border: 1px solid #031273;
                border-radius: 5px;
            }

            .delete:hover, .delete:focus{
                color: #031273;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    Booking For - Hotels
                </a>
                <a href="admin_home.php" class="btn-back">
                    Back
                </a>
            </div>
        </nav>
        <?php
            $query = "SELECT * FROM `b_hotels`";
            $result = mysqli_query($con, $query);
            $i = 0;
            while($data = mysqli_fetch_assoc($result))
            {
                if($i == 0)
                {
        ?>
        <div class="card">
            <h3 class="card-header">
                <?php
                    echo $data['name'];
                ?>
            </h3>
            <div class="card-body">
                <h5 class="email">
                    Email : 
                    <label for="email" class="email-1">
                        <?php
                            echo $data['email'];
                        ?>
                    </label>
                </h5>
                <h5 class="contact">
                    Contact : 
                    <label for="contact" class="contact-1">
                        <?php
                            echo $data['contact'];
                        ?>
                    </label>
                </h5>
                <h5 class="v-name">
                    Venue Name : 
                    <label for="v_name" class="v-name-1">
                        <?php
                            echo $data['v_name'];
                        ?>
                    </label>
                </h5>
                <h5 class="f-date">
                    From This Date : 
                    <label for="from_this_date" class="f-date-1">
                        <?php
                            echo $data['from_this_date'];
                        ?>
                    </label>
                </h5>
                <h5 class="t-date">
                    To This Date : 
                    <label for="to_this_date" class="t-date-1">
                        <?php
                            echo $data['to_this_date'];
                        ?>
                    </label>
                </h5>
                <h5 class="f-time">
                    From This Time : 
                    <label for="from_this_time" class="f-time-1">
                        <?php
                            echo $data['from_this_time'];
                        ?>
                    </label>
                </h5>
                <h5 class="t-time">
                    To This Time : 
                    <label for="to_this_time" class="t-time-1">
                        <?php
                            echo $data['to_this_time'];
                        ?>
                    </label>
                </h5>
                <h5 class="space">
                    Space : 
                    <label for="space" class="space-1">
                        <?php
                            echo $data['space'];
                        ?>
                    </label>
                </h5>
                <h5 class="function">
                    Function : 
                    <label for="function" class="function-1">
                        <?php
                            echo $data['function'];
                        ?>
                    </label>
                </h5>
                <a href="delete_booking_details.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are You Sure You Want To Delete?')" class="delete">
                    Delete
                </a>
            </div>
        </div>
        <?php
                }

                else
                {
        ?>
        <div class="hr">
            <hr>
        </div>

        <div class="card">
            <h3 class="card-header">
                <?php
                    echo $data['name'];
                ?>
            </h3>
            <div class="card-body">
                <h5 class="email">
                    Email : 
                    <label for="email" class="email-1">
                        <?php
                            echo $data['email'];
                        ?>
                    </label>
                </h5>
                <h5 class="contact">
                    Contact : 
                    <label for="contact" class="contact-1">
                        <?php
                            echo $data['contact'];
                        ?>
                    </label>
                </h5>
                <h5 class="v-name">
                    Venue Name : 
                    <label for="v_name" class="v-name-1">
                        <?php
                            echo $data['v_name'];
                        ?>
                    </label>
                </h5>
                <h5 class="f-date">
                    From This Date : 
                    <label for="from_this_date" class="f-date-1">
                        <?php
                            echo $data['from_this_date'];
                        ?>
                    </label>
                </h5>
                <h5 class="t-date">
                    To This Date : 
                    <label for="to_this_date" class="t-date-1">
                        <?php
                            echo $data['to_this_date'];
                        ?>
                    </label>
                </h5>
                <h5 class="f-time">
                    From This Time : 
                    <label for="from_this_time" class="f-time-1">
                        <?php
                            echo $data['from_this_time'];
                        ?>
                    </label>
                </h5>
                <h5 class="t-time">
                    To This Time : 
                    <label for="to_this_time" class="t-time-1">
                        <?php
                            echo $data['to_this_time'];
                        ?>
                    </label>
                </h5>
                <h5 class="space">
                    Space : 
                    <label for="space" class="space-1">
                        <?php
                            echo $data['space'];
                        ?>
                    </label>
                </h5>
                <h5 class="function">
                    Function : 
                    <label for="function" class="function-1">
                        <?php
                            echo $data['function'];
                        ?>
                    </label>
                </h5>
                <a href="delete_booking_details.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are You Sure You Want To Delete?')" class="delete">
                    Delete
                </a>
            </div>
        </div>

        <?php
                }

                $i++;
            }
        ?>

        <script src="js/bootstrap.js"></script> 
    </body>
</html>