<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:client_login.php");
    }
    include("config.php");
    $id=$_GET['id'];
    $query="SELECT * FROM `makeup_hair` WHERE `id` = '$id'";
    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Makeup & Hairstyle Artist
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

            .list-group-starting{
            width: 633px;
            margin-left: 789px;
            margin-top: -550px;
            border-radius: 5px;
            }

            .list-group-starting .starting{
            color: black;
            font-size: 25px;
            margin-left: 10px;
            }

            .list-group-starting hr{
            width: 550px;
            margin-left: 8px;
            margin-top: 10px;
            margin-bottom: -10px;
            }

            .list-group-starting .bridal{
            color: black;
            margin-left: 310px;
            font-size: 20px;
            }

            .list-group-starting .bridal-makeup{
                color: #ff1d8e;
                font-size: 22px;
            }

            .list-group-starting .airbrush-makeup{
            color: #ff1d8e;
            margin-left: 10px;
            font-size: 22px;
            padding-top: 10px;
            }

            .list-group-starting .airbrush{
            color: black;
            margin-left: 285px;
            font-size: 20px;
            }

            .list-group-starting .party-makeup{
            color: #ff1d8e;
            margin-left: 10px;
            font-size: 22px;
            padding-top: 10px;
            }

            .list-group-starting .party{
            color: black;
            margin-left: 232px;
            font-size: 20px;
            }

            .list-group-starting .engagement-makeup{
            color: #ff1d8e;
            margin-left: 10px;
            font-size: 22px;
            padding-top: 10px;
            }

            .list-group-starting .engagement{
            color: black;
            margin-left: 250px;
            font-size: 20px;
            }

            .list-group-starting .outstation-makeup{
            color: #ff1d8e;
            margin-left: 10px;
            font-size: 22px;
            padding-top: 10px;
            }

            .list-group-starting .outstation{
            color: black;
            margin-left: 188px;
            font-size: 20px;
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

            .navbar-brand-makeup{
            color: white;
            text-decoration: none;
            font-size: 30px;
            padding-top: 7px;
            padding-bottom: 7px;
            margin-left: 200px;
            }

            .navbar-brand-makeup:hover{
                color: white;
            }

            .btn-booking-makeup{
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

            .btn-booking-makeup:hover, .btn-booking-makeup:focus{
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
                <a class="navbar-brand-makeup" href="">
                    <?php
                        echo $data['name'];
                    ?>
                </a>
                <a href="booking.php" class="btn-booking-makeup" tabindex="-1" role="button" aria-disabled="true">
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
                    <a href="client_makeup_hair.php">
                        Makeup & Hairstyle
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
                </p>
                <a href="reviews.php" class="review">
                    Reviews
                </a>
            </div>
        </div>

        <ul class="list-group-starting">
            <li class="list-group-item">
                <label for="starting" class="starting">
                    Starting Price
                </label>
                <hr>
                <br>
                <label for="bridal-makeup" class="bridal-makeup">
                    ₹
                    <?php 
                        echo $data['bridal_makeup'];
                    ?>
                </label>
                <label for="bridal" class="bridal">
                    Bridal Makeup 
                </label>
                <br>
                <label for="airbrush-makeup" class="airbrush-makeup">
                    ₹
                    <?php 
                        echo $data['airbrush'];
                    ?>
                </label>
                <label for="airbrush" class="airbrush">
                    Airbrush Makeup 
                </label>
                <br>
                <label for="party-makeup" class="party-makeup">
                    ₹
                    <?php 
                        echo $data['party_family'];
                    ?>
                </label>
                <label for="party" class="party">
                    Party Makeup For Family 
                </label>
                <br>
                <label for="engagement-makeup" class="engagement-makeup">
                    ₹
                    <?php 
                        echo $data['engagement'];
                    ?>
                </label>
                <label for="engagement" class="engagement">
                    Engagement Makeup 
                </label>
                <br>
                <label for="outstation-makeup" class="outstation-makeup">
                    ₹
                    <?php 
                        echo $data['outstation'];
                    ?>
                </label>
                <label for="outstation" class="outstation">
                    Outstation Makeup Charges 
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