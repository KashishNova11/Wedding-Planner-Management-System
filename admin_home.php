<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            WedMeGood - Admin
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>

        </style>
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
                                    <a class="dropdown-item" href="admin_banquet_halls.php">
                                        Banquet Halls
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_lawns_farmhouses.php">
                                        Lawns / Farmhouses
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_hotels.php">
                                        Wedding Hotels
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_resorts.php">
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
                                    <a class="dropdown-item" href="admin_photographer.php">
                                        Photographer
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_makeup_hair.php">
                                        Makeup
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_bridal_wear.php">
                                        Bridal Wear
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_groom_wear.php">
                                        Groom Wear
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_jewellery.php">
                                        Jewellery
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_mehndi.php">
                                        Mehndi
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_music_dance.php">
                                        Music & Dance
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_decorations.php">
                                        Decorations
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="admin_food.php">
                                        Food
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin_review.php">
                                Reviews
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin_bookings.php">
                                Bookings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="all_clients.php">
                                Clients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin_contact.php">
                                Messages
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

        <script src="js/bootstrap.js"></script>
    </body>
</html>