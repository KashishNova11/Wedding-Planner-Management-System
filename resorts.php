<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:client_login.php");
    }
    include("config.php");
    $id=$_GET['id'];
    $query="SELECT * FROM `resorts` WHERE `id` = '$id'";
    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            wedding Resorts
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .figure-img{
                width: 700px;
                border-radius: 20px;
                margin-left: 100px;
                margin-top: 20px;
            }

            .card-details{
                border: 1px solid rgba(0,0,0,.125);
                width: 700px;
                margin-left: 100px;
                margin-top: -10px;
                border-radius: 5px;
                padding-bottom: 10px;
            }

            .review{
                color: white;
                background-color: #008631;
                border: 1px solid #008631;
                text-decoration: none;
                margin-left: 10px;
                padding-top: 7px;
                padding-bottom: 7px;
                padding-right: 20px;
                padding-left: 20px;
                border-radius: 5px;
                font-size: 17px;
            }

            .review:hover, .review:focus{
                color: #008631;
                background-color: white;
            }

            .list-group-food-1{
                margin-top: -575px;
                margin-left: 788px;
                width: 633px;
                border-radius: 5px;
            }

            .list-group-food-1 .list-group-item .veg{
            color: #ff1d8e;
            font-size: 20px;
            margin-left: 10px;
            padding-top: 7px;
            padding-bottom: 7px;
            }

            .list-group-food-1 .list-group-item .veg-tax{
            color: grey;
            font-size: 15px;
            }

            .list-group-food-1 .list-group-item .veg-tag{
            color: black;
            font-size: 18px;
            margin-left: 167px;
            }

            .list-group-food-1 .list-group-item .non-veg{
            color: #ff1d8e;
            font-size: 20px;
            margin-left: 10px;
            padding-top: 7px;
            padding-bottom: 7px;
            }

            .list-group-food-1 .list-group-item .non-veg-tax{
            color: grey;
            font-size: 15px;
            }

            .list-group-food-1 .list-group-item .non-veg-tag{
            color: black;
            font-size: 18px;
            margin-left: 130px;
            }

            .list-group-area{
            width: 633px;
            margin-left: 789px;
            margin-top: 20px;
            border-radius: 5px;
            }

            .list-group-area .area-tag{
            color: #ff1d8e;
            font-size: 25px;
            padding-top: 7px;
            padding-bottom: 7px;
            margin-left: 10px;
            }

            .list-group-area hr{
            width: 550px;
            margin-left: 8px;
            margin-top: 10px;
            margin-bottom: -10px;
            }

            .list-group-area .indoor{
            color: black;
            margin-left: 10px;
            font-size: 20px;
            }

            .list-group-area .inout{
            color: black;
            margin-left: 10px;
            font-size: 20px;
            padding-top: 10px;
            }

            .list-group-area .outdoor{
            color: black;
            margin-left: 10px;
            font-size: 20px;
            padding-top: 10px;
            }

            .list-group-area .indoor-area{
            color: grey;
            font-size: 17px;
            }

            .list-group-area .outdoor-area{
            color: grey;
            font-size: 17px;
            }

            .list-group-area .inout-area{
            color: grey;
            font-size: 17px;
            padding-bottom: 10px;
            }

            .list-group-about{
                width: 633px;
                margin-left: 790px;
                border-radius: 5px;
                margin-top: 10px;
            }

            .list-group-about hr{
                width: 530px;
                margin-left: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .list-group-about .about{
                color: black;
                font-size: 25px;
                margin-left: 10px;
            }

            .list-group-about .about-1{
                color: grey;
            }

            .navbar-brand-resorts{
            color: white;
            text-decoration: none;
            font-size: 30px;
            padding-top: 7px;
            padding-bottom: 7px;
            margin-left: 200px;
            }

            .navbar-brand-resorts:hover{
                color: white;
            }

            .btn-booking-resorts{
            color: #ff1d8e;
            background-color: white;
            text-decoration: none;
            font-size: 18px;
            margin-right: 200px;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-right: 20px;
            padding-left: 20px;
            border-radius: 7px;
            border: 1px solid #ff1d8e;
            }

            .btn-booking-resorts:hover, .btn-booking-resorts:focus{
            color: white;
            background-color: #008631;
            }

            footer{
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <?php
            while($data=mysqli_fetch_assoc($result))
            {
        ?>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand-resorts" href="">
                    <?php
                        echo $data['name'];
                    ?>
                </a>
                <a href="booking.php" class="btn-booking-hotels" tabindex="-1" role="button" aria-disabled="true">
                    Booking
                </a>
            </div>
        </nav>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="client_home.php">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="client_resorts.php">
                        Wedding Resorts
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php
                        echo $data['name'];
                    ?>
                </li>
            </ol>
        </nav>
    
        <figure class="figure">
            <img src="<?php echo "img/".$data['img']; ?>" class="figure-img img-fluid rounded" alt="...">
        </figure>

        <div class="card-details">
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                        echo $data['name'];
                    ?>
                </h5>
                <p class="card-text">
                    <img src="img/location.png" alt="">
                    <?php
                        echo $data['location'];
                    ?>
                    <a href="View_On_Map/view_on_map.php">
                        (View On Map)
                    </a>
                    <br>
                    <?php
                    echo $data['address'];
                ?>
                </p>
                <a href="reviews.php" class="review">
                    Reviews
                </a>
            </div>
        </div>

        <ul class="list-group-food-1">
            <li class="list-group-item">
                <label for="veg" class="veg">
                    ₹
                    <?php 
                        echo $data['veg'];
                    ?>
                    per plate
                </label>
                <label for="veg-tax" class="veg-tax">
                    (taxes extra)
                </label>
                <label for="veg-tag" class="veg-tag">
                    Veg Price
                </label>
            </li>
            <li class="list-group-item">
                <label for="non-veg" class="non-veg">
                    ₹
                    <?php 
                        echo $data['non_veg'];
                    ?>
                    per plate
                </label>
                <label for="non-veg-tax" class="non-veg-tax">
                    (taxes extra)
                </label>
                <label for="non-veg-tag" class="non-veg-tag">
                    Non Veg Price
                </label>
            </li>
        </ul>

        <ul class="list-group-area">
            <li class="list-group-item">
                <label for="area-tag" class="area-tag">
                    Area Available
                </label>
                <hr>
                <br>
                <label for="indoor" class="indoor">
                    Indoor -
                </label>
                <label for="indoor-area" class="indoor-area">
                    <?php 
                        echo $data['indoor'];
                    ?>
                </label>
                <br>
                <label for="outdoor" class="outdoor">
                    Outdoor -
                </label>
                <label for="outdoor-area" class="outdoor-area">
                    <?php 
                        echo $data['outdoor'];
                    ?>
                </label>
                <br>
                <label for="inout" class="inout">
                    Indoor & Outdoor -
                </label>
                <label for="inout-area" class="inout-area">
                    <?php 
                        echo $data['in_out'];
                    ?>
                </label>
            </li>
        </ul> 

        <ul class="list-group-about">
            <li class="list-group-item">
                <label for="about" class="about">
                    About 
                    <?php 
                        echo $data['name'];
                    ?>
                    <hr>
                </label>
                <label for="about-1" class="about-1">
                    <?php
                        echo $data['about'];
                    ?>
                </label>
            </li>
        </ul>

        <?php 
                }
        ?>
        <footer id="footer">
            <div class="container text-center">
                <div class="row row-cols-3">
                    <div class="footer-info">
                        <div class="section-title">
                            <h3>
                                Follow Us
                            </h3>
                        </div>
                        <a href="Whatsapp/whatsapp.php">
                            <img src="img/whatsapp.png" alt="">
                        </a>
                        <a href="Instagram/instagram.php">
                            <img src="img/instagram.png" alt="">
                        </a>
                        <a href="Facebook/facebook.php">
                            <img src="img/facebook.png" alt="">
                        </a>
                        <a href="Twitter/twitter.php">
                            <img src="img/twitter.png" alt="">
                        </a>
                    </div>
                    <div class="footer-info">
                        <div class="footer-menu">
                            <h3>
                                Quick Links
                            </h3>
                            <a href="client_home.php">
                                Home
                            </a>&nbsp
                            <a href="contact_us.php">
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="footer-info">
                        <div class="section-title">
                            <address>
                                <p>
                                    <a href="contact-to:7284015174">
                                        +91 7284015174
                                    </a>
                                </p>
                                <p>
                                    <a href="mailto:wedmegood@gmail.com">
                                        wedmegood@gmail.com
                                    </a>
                                </p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/bootstrap.js"></script>
    </body>
</html>