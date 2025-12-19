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
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="client_home.php">
                    WedMeGood
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Venues
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="client_banquet_halls.php">
                                        Banquet Halls
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_lawns_farmhouses.php">
                                        Lawns / Farmhouses
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_hotels.php">
                                        Wedding Hotels
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_resorts.php">
                                        Wedding Resorts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vendors
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="client_photographer.php">
                                        Photographer
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_makeup_hair.php">
                                        Makeup
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_bridal_wear.php">
                                        Bridal Wear
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_groom_wear.php">
                                        Groom Wear
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_jewellery.php">
                                        Jewellery
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_mehndi.php">
                                        Mehndi
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_music_dance.php">
                                        Music & Dance
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_decorations.php">
                                        Decorations
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="client_food.php">
                                        Food
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reviews.php">
                                Reviews
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="bookings.php">
                                Bookings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="client_profile.php">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_us.php">
                                Contact Us
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="logout.php">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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

        <div class="popular-venues">
            <h4>
                Popular Venues
            </h4>
        </div>
            <div class="card-1">
                <img src="img/juhu_club_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Juhu Club Millennium
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                        Suburbs, Mumbai
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_banquet_halls.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
            <div class="card-2">
                <img src="img/harbor_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Roche Harbor
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                        Dera Bassi, Chandigarh
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_banquet_halls.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
            <div class="card-3">
                <img src="img/raddison_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Radisson Blu Resort Goa, Cavelossim Beach
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                        Cavellosim Goa
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_resorts.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
        <hr>

        <div class="popular-vendors">
            <h4>
                Popular Vendors
            </h4>
        </div>
            <div class="card-4">
                <img src="img/pixel_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Pixel Chronicles
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                        South Bangalore, Bangalore
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_photographer.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
            <div class="card-5">
                <img src="img/kundans_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Kundans Bridal Couture
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                            Chandni Chowk, Delhi NCR
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_bridal_wear.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
            <div class="card-6">
                <img src="img/krishna_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Krishna Mehandi Art
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                        Noida, Noida
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_mehndi.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
            <hr>

            <div class="food">
            <h4>
                Food & Catering Services
            </h4>
        </div>
            <div class="card-14">
                <img src="img/deccan_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Deccan Plate Caterers
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                        KPHB, Hydrabad
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_food.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
            <div class="card-15">
                <img src="img/seasons_1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Seasons Catering Services
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                        MG Road, Delhi NCR
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_food.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
            <div class="card-16">
                <img src="img/royal_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Royal Cafe Caterers
                    </h5>
                    <p class="card-text">
                        <img src="img/location.png" alt="">
                        Hazrantganj, Lucknow
                        <a href="View_On_Map/view_on_map.php">
                            (View On Map)
                        </a>
                        <br>
                    </p>
                    <a href="client_food.php" class="btn-home">
                        Know More
                    </a>
                </div>
            </div>
            <hr>

            <div class="invitation">
                <h4>
                    Invitation Cards
                </h4>
            </div>
            <div class="card-7">
                <img src="img/serenity_1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="serenity.php">
                        Serenity
                    </a>
                </div>
            </div>
            <div class="card-8">
                <img src="img/mangalam_1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="mangalam.php">
                        Mangalam
                    </a>
                </div>
            </div>
            <div class="card-9">
                <img src="img/aashiyana_1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="aashiyana.php">
                        Aashiyana
                    </a>
                </div>
            </div>
            <div class="card-10">
                <img src="img/rose_1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="rose.php">
                        Paper Rose
                    </a>
                </div>
            </div>
            <div class="card-11">
                <img src="img/nikah_1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="nikah.php">
                        Nikah
                    </a>
                </div>
            </div>
        <hr>

        <div class="gallery">
            <h4>
                Gallery to Look For
            </h4>
        </div>
        <div class="card-gallery-1" style="width: 18rem;">
            <img src="img/bridal_1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-1">
                    <a href="bridal_photo.php">
                        Bridal Lehenga
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-2" style="width: 18rem;">
            <img src="img/blouse_1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-1">
                    <a href="bridal_photo.php">
                        Blouse Design
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-3" style="width: 18rem;">
            <img src="img/saree_1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-1">
                    <a href="bridal_photo.php">
                        Wedding Saree
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-4" style="width: 18rem;">
            <img src="img/mehndi_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-1">
                    <a href="mehndi_photo.php">
                        Mehndi Designs
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-5" style="width: 18rem;">
            <img src="img/jewellery_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-2">
                    <a href="jewellery_photos.php">
                        Wedding Jewellery 
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-6" style="width: 18rem;">
            <img src="img/hair_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-2">
                    <a href="makeup_hair_photo.php">
                        Wedding Hairstyles
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-7" style="width: 18rem;">
            <img src="img/decoration_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-3">
                    <a href="decoration_photos.php">
                        Wedding Decor
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-8" style="width: 18rem;">
            <img src="img/photography_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-4">
                    <a href="photogtapher.php">
                        Wedding Photoshoot
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-9" style="width: 18rem;">
            <img src="img/invitation_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-2">
                    <a href="wedding_cards_photos.php">
                        Wedding Invitations
                    </a>
                </p>
            </div>
        </div>
        <div class="card-gallery-10" style="width: 18rem;">
            <img src="img/venues_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text-2">
                    <a href="venues.php">
                        Wedding Venues
                    </a>
                </p>
            </div>
        </div>
        <hr>
        <div class="latest">
            <h4>
                Latest Photos
            </h4>
        </div>
        <div class="card-12">
            <img src="img/latest_1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h6 class="card-title-1">
                    7 Things We Loved About This Maharashrtian Bridal Look!
                </h6>
                <hr>
                <p class="card-text">
                    Wedding are all about traditions, emotions, and stunning outfits, and maharashtrian bridal looks are no exception! The charm, grace, and culture richness is a maharashtrian bridal look are simply amazing. From the beautiful saree to the unique nath, every deatil has its own story. But when we saw this Maharashtrian bridal look, it look our breath away. Ananya and Amit's wedding was a beautiful nuptial in Pune and the bridal look was simply and gorgeous. 
                </p>
            </div>
        </div>
        <div class="card-13">
            <img src="img/latest_2.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h6 class="card-title-1">
                    Modern Delhi Wedding With A Tredditional, Classic Asthetic
                </h6>
                <hr>
                <p class="card-text">
                    With everyone choosing modern trends and colour palettes these days, it is refreshing when we come across a tasteful wedding with a classic vibe. Sonia and Dhruv could have chosen to go down the contemporary route, but their Delhi wedding had this classic charm which is timeless. The bride wore red, the decor was in rich jewel tones and we loved how everything had a traditional touch, while still appearing modern. Now that's a vibe we'd like more couples to nail! 
                </p>
            </div>
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