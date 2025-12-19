<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:client_login.php");
    }
    include "config.php";
    $query = "SELECT * FROM `reviews`";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Reviews
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

            .btn-review{
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
                margin-right: -640px;
            }

            .btn-review:hover, .btn-review:focus{
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
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    Reviews
                </a>
                <a class="btn-review" href="client_review_form.php">
                    Your Review
                </a>
                <a href="client_home.php" class="btn-back">
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
                        Reviewed By:
                    </label>
                    <?php
                        echo $data['name'];
                    ?>
                </h5>
                <div class="card-body text-dark">
                    <h6 class="card-title">
                        <?php
                            echo $data['email'];
                        ?>
                    </h6>
                    <p class="card-text">
                        <?php
                            echo $data['review'];
                        ?>
                    </p>
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
                        Reviewed By:
                    </label>
                    <?php
                        echo $data['name'];
                    ?>
                </h5>
                <div class="card-body text-dark">
                    <h6 class="card-title">
                        <?php
                            echo $data['email'];
                        ?>
                    </h6>
                    <p class="card-text">
                        <?php
                            echo $data['review'];
                        ?>
                    </p>
                </div>
            </div>

        <?php
                }

                $i++;
            }
        ?>
    </body>
</html>