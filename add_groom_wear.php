<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }

    include "config.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $location = $_POST['location'];
        $img = $_FILES['img']['name'];
        $suit_tux = $_POST['suit_tux'];
        $sherwani_price = $_POST['sherwani_price'];
        $about = $_POST['about'];

        if(file_exists("img/".$_FILES['img']['name']))
        {
            $filename = $_FILES['img']['name'];
            $_SESSION['status'] = "Image Already Exists...".$filename;
        }

        else
        {
            $insert = "INSERT INTO `groom_wear`(`name`,`location`,`img`,`suit_tux`,`sherwani_price`,`about`) VALUES('$name','$location','$img','$suit_tux','$sherwani_price','$about')";
            $result = mysqli_query($con, $insert);
        }

        if($result)
        {
            move_uploaded_file($_FILES['img']['tmp_name'],"img/".$_FILES['img']['name']);
            $_SESSION['status'] = "Successfully...";
            header("location:add_groom_wear.php");
        }

        else
        {
            $_SESSION['status'] = "Not Successfully...";
            header("location:add_groom_wear.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Add Groom Wear
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="form-container-groom">
            <?php
                    if(isset($_SESSION['status']) && $_SESSION != '')
                    {
                ?>

                <div class="alert alert-waring alert-dismissible fade show" role="alert">
                    <strong>
                        Hey !
                    </strong>
                    <?php
                        echo $_SESSION['status']; 
                    ?>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                    </button>
                </div>

                <?php
                    unset($_SESSION['status']);
                    }
                ?>
            <form action="add_groom_wear.php" method="post" enctype="multipart/form-data">
                <h3>
                    Add Groom Wear
                </h3>
                <label for="name">
                    Name
                </label>
                <input type="text" id="name" name="name" placeholder="Enter Vendor Name" required>
                <label for="location">
                    Location
                </label>
                <input type="text" id="location" name="location" placeholder="Enter Location" required>
                <label for="image">
                    Photo
                </label>
                <input type="file" name="img" id="image" accept="img/*">
                <label for="suit_tux">
                    Suit / Tux Price
                </label>
                <input type="text" id="suit_tux" name="suit_tux" placeholder="Enter Price">
                <label for="sherwani_price">
                    Sherwani Price
                </label>
                <input type="text" id="sherwani_price" name="sherwani_price" placeholder="Enter Price">
                <label for="about">
                    About Vendor
                </label>
                <input type="textarea" id="about" name="about" placeholder="About Vendor">
                <input type="submit" name="submit" Value="Add Vendor" class="btn-add-groom">
                <a href="admin_groom_wear.php" class="btn-all-groom">
                    Show All Grrom Wear
                </a>&nbsp
                <a href="admin_home.php" class="btn-back-home">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>