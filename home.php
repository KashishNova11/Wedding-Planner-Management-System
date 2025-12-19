<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            WedMeGood
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">
                    WedMeGood
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Login
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="admin_login.php">
                                        Admin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_login.php">
                                        Clients
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">
                                Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- image-slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100" alt="First">
                </div>
                <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100" alt="Second">
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100" alt="Third">
                </div>
            </div>
        </div>

        <!-- Popular Venues -->
        <div class="popular-venues">
            <h4>
                Popular Venues
            </h4>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/bravura_gold_resort_1.jpeg" class="card-img-top" alt="card1">
                    <div class="card-body">
                        <h5 class="card-title">
                            Bravura Gold Resort
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            Partapur Meerut
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                            <br>
                            Delhi - Roorkee Bypass, Partapur, Meerut,(U.P.) - 250103, India
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/hotel_diggi_palace_1.jpg" class="card-img-top" alt="card2">
                    <div class="card-body">
                        <h5 class="card-title">
                            Hotel Diggi Palace
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            Jawahar Nagar, Jaipur
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                            <br>
                            Diggi House, Shivaji Marg, Sawai Ram Singh Rd, C Scheme, Jaipur, Rajasthan, India
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/royal_orchid_beach_1.jpg" class="card-img-top" alt="card3">
                    <div class="card-body">
                        <h5 class="card-title">
                            Royal Orchid Beach Resort & Spa, Goa
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            Utorda, Goa
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                            <br>
                            Royal Orchid Beach Resort & Spa, Utorda Beach Road, Utorda, Goa, India
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Popular Vendors -->
        <div class="popular-vendors">
            <h4>
                Popular Vendors
            </h4>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/vandana_dubey_1.jpg" class="card-img-top" alt="card1">
                    <div class="card-body">
                        <h5 class="card-title">
                            Vandana Dubey - Makeup & Hair
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            Chattarpur, Delhi NCR
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/krishnChandra_events_1.jpg" class="card-img-top" alt="card2">
                    <div class="card-body">
                        <h5 class="card-title">
                            KrishnChandra Events
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            Sodala, Jaipur
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/clicking_shaadi_1.jpg" class="card-img-top" alt="card3">
                    <div class="card-body">
                        <h5 class="card-title">
                            Clicking Shaadi
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            Lalpur, Ranchi
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Food & Catering -->
        <div class="food">
            <h4>
                Food & Catering Services
            </h4>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/aditya_caterers_1.jpg" class="card-img-top" alt="card1">
                    <div class="card-body">
                        <h5 class="card-title">
                            Aditya Catering
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            Gorakhpur
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/copper_catering_1.webp" class="card-img-top" alt="card2">
                    <div class="card-body">
                        <h5 class="card-title">
                           Copper Catering
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            South Mumbai, Mumbai
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/wedplan_caterers_1.webp" class="card-img-top" alt="card3">
                    <div class="card-body">
                        <h5 class="card-title">
                            WedPlan Caterers & Decorators
                        </h5>
                        <p class="card-text">
                            <img src="img/location.png" alt="location">
                            Jammu
                            <a href="View_On_Map/view_on_map.php">
                                (View On Map)
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- About Us -->
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