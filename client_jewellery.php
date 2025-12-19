<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:client_login.php");
    }
    include("config.php");
    $query="SELECT * FROM `jewellery`";
    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Client Jewellery
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .card-jewellery-1{
            width: 450px;
            margin-left: 20px;
            margin-top: 20px;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            }

            .card-jewellery-1 img{
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            }

            .card-jewellery-1 .btn-know{
            color: white;
            background-color: #ff1d8e;
            text-decoration: none;
            font-size: 17px;
            border: 1px solid #ff1d8e;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 150px;
            }

            .card-jewellery-1 .btn-know:hover, .card-jewellery-1 .btn-know:focus{
            color: #ff1d8e;
            background-color: white;
            }

            .card-jewellery-1 .card-text{
            padding-bottom: 20px;
            }

            .card-jewellery-2{
            width: 450px;
            margin-left: 20px;
            margin-top: 20px;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            }

            .card-jewellery-2 img{
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            }

            .card-jewellery-2 .btn-know{
            color: white;
            background-color: #ff1d8e;
            text-decoration: none;
            font-size: 17px;
            border: 1px solid #ff1d8e;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 150px;
            }

            .card-jewellery-2 .btn-know:hover, .card-jewellery-2 .btn-know:focus{
            color: #ff1d8e;
            background-color: white;
            }

            .card-jewellery-2 .card-text{
            padding-bottom: 20px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand-client" href="client_jewellery.php">
                    Jewellery
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
                <li class="breadcrumb-item active" aria-current="page">
                    Jewellery
                </li>
            </ol>
        </nav>

        <div class="wedding-vendors">
            <h3>
                Wedding Vendors
            </h3>
            <p>
                Showing results as per your requirement
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                $i = 0;
                while($data=mysqli_fetch_assoc($result))
                {
                    if($i==0)
                    {
            ?>
            <div class="col">
                <div class="card-jewellery-1 h-100">
                    <img src="<?php echo "img/".$data['img']; ?>" class="card-img-top" alt="...">
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
                        <a href="jewellery.php?id=<?php echo $data['id'] ?>" class="btn-know">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <?php
                    }
                    else
                    {
            ?>
            <div class="col">
                <div class="card-jewllery-2 h-100">
                    <img src="<?php echo "img/".$data['img']; ?>" class="card-img-top" alt="...">
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
                        <a href="jewellery.php?id=<?php echo $data['id'] ?>" class="btn-know">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <?php
                    }
                    $i++;
                }
            ?>
        </div>
        <hr>

        <div class="aboutus">
            <h4>
                <u>
                    About Us
                </u>    
            </h4>
        </div>
        <div class="aboutus-1">
            <h6>
                WedMeGood - Your Personal Wedding Planner
            </h6>
            <h7>
                Plan Your Wedding With Us
                <p>
                    WedMeGood is an Indian Wedding Planning Website and app where you can find the best wedding vendors, with prices and reviews at the click of a button. Whether you are looking to hire wedding planners in India, or looking for the top photographers, or just some ideas and inspiration for your wedding. WedMeGood can help you solve your wedding planning woes through its unique features. With a checklist, detailed vendor list, inspiration gallery - you won't need to spend hours planning a wedding anymore.
                </p>
            </h7>
        </div>
        
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
                            <a href="home.php">
                                Home
                            </a>&nbsp
                            <a href="Contact_Us/contact_us.php">
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