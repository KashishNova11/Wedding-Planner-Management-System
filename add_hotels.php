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
        $address = $_POST['address'];
        $veg = $_POST['veg'];
        $non_veg = $_POST['non_veg'];
        $img = $_FILES['img']['name'];
        $indoor = $_POST['indoor'];
        $outdoor = $_POST['outdoor'];
        $in_out = $_POST['in_out'];
        $about = $_POST['about'];

        if(file_exists("img/".$_FILES['img']['name']))
        {
            $filename = $_FILES['img']['name'];
            $_SESSION['status'] = "Image Already Exists...".$filename;
        }

        else
        {
            $insert = "INSERT INTO `hotels`(`name`,`location`,`address`,`veg`,`non_veg`,`img`,`indoor`,`outdoor`,`in_out`,`about`) VALUES('$name','$location','$address','$veg','$non_veg','$img','$indoor','$outdoor','$in_out','$about')";
            $result = mysqli_query($con, $insert);
        }

        if($result)
        {
            move_uploaded_file($_FILES['img']['tmp_name'],"img/".$_FILES['img']['name']);
            $_SESSION['status'] = "Successfully...";
            header("location:add_hotels.php");
        }

        else
        {
            $_SESSION['status'] = "Not Successfully...";
            header("location:add_hotels.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Add Wedding Hotels
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="form-container-hotels">
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
            <form action="add_hotels.php" method="post" enctype="multipart/form-data">
                <h3>
                    Add Wedding Hotels
                </h3>
                <label for="name">
                    Name
                </label>
                <input type="text" id="name" name="name" placeholder="Enter Venue Name" required>
                <label for="location">
                    Location
                </label>
                <input type="text" id="location" name="location" placeholder="Enter Location" required>
                <label for="address">
                    Address
                </label>
                <input type="textarea" id="address" name="address" placeholder="Enter Address" required>
                <label for="veg">
                    Veg Price
                </label>
                <input type="text" id="veg" name="veg" placeholder="Enter Veg Price">
                <label for="non_veg">
                    Non Veg Price
                </label>
                <input type="text" id="non_veg" name="non_veg" placeholder="Enter Non Veg Price">
                <label for="image">
                    Photo
                </label>
                <input type="file" name="img" id="image" accept="img/*">
                <label for="indoor">
                    Indoor Space Availability
                </label>
                <input type="text" id="indoor" name="indoor" placeholder="Enter Space Availability">
                <label for="outdoor">
                    Outdoor Space Availability
                </label>
                <input type="text" id="outdoor" name="outdoor" placeholder="Enter Space Availability">
                <label for="in_out">
                    Indoor & Outdoor
                </label>
                <input type="text" id="in_out" name="in_out" placeholder="Enter Space Availability">
                <label for="about">
                    About Venue
                </label>
                <input type="textarea" id="about" name="about" placeholder="About Venue">
                <input type="submit" name="submit" Value="Add Venue" class="btn-add-hotels">
                <a href="admin_hotels.php" class="btn-all-hotels">
                    Show All Hotels
                </a>&nbsp
                <a href="admin_home.php" class="btn-back-home">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>