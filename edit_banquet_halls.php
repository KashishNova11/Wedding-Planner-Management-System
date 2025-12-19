<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }
    

    include "config.php";
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM `banquet_halls` WHERE `id`='$id'";
        $result = mysqli_query($con, $query);

        if(!$result)
        {
            die("Query Failled...".mysqli_error());
        }

        else
        {
            $row = mysqli_fetch_assoc($result);
        }
    }
?>

<?php
    include "config.php";
    if(isset($_POST['submit']))
    {
        if(isset($_GET['id_new']))
        {
            $id_new = $_GET['id_new'];
        }

        $name = $_POST['name'];
        $location = $_POST['location'];
        $address = $_POST['address'];
        $veg = $_POST['veg'];
        $non_veg = $_POST['non_veg'];
        $img = $_POST['img'];
        $indoor = $_POST['indoor'];
        $outdoor = $_POST['outdoor'];
        $in_out = $_POST['in_out'];
        $about = $_POST['about'];

        $query = "UPDATE `banquet_halls` SET `name`='$name',`location`='$location',`address`='$address',`veg`='$veg',`non_veg`='$non_veg',`img`='$img',`indoor`='$indoor',`outdoor`='$outdoor',`in_out`='$in_out',`about`='$about' WHERE `id` = '$id_new'";
        
        $result = mysqli_query($con, $query);

        if(!$result)
        {
            die("Query Failled...".mysqli_error());
        }

        else
        {
            header("location:admin_banquet_halls.php?update_msg=Data Updated Successfully...");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Update Banquet Halls
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="form-container-banquet">
            <form action="edit_banquet_halls.php?id_new=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <h3>
                    Update Banquet Halls
                </h3>
                <label for="name">
                    Name
                </label>
                <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
                <label for="location">
                    Location
                </label>
                <input type="text" id="location" name="location" value="<?php echo $row['location']; ?>">
                <label for="address">
                    Address
                </label>
                <input type="textarea" id="address" name="address" value="<?php echo $row['address']; ?>">
                <label for="veg">
                    Veg Price
                </label>
                <input type="text" id="veg" name="veg" value="<?php echo $row['veg']; ?>">
                <label for="non_veg">
                    Non Veg Price
                </label>
                <input type="text" id="non_veg" name="non_veg" value="<?php echo $row['non_veg']; ?>">
                <label for="image">
                    Photo
                </label>
                <input type="file" name="img" id="image" accept="img/*" value="<?php echo $row['img']; ?>">
                <label for="indoor">
                    Indoor Space Availability
                </label>
                <input type="text" id="indoor" name="indoor" value="<?php echo $row['indoor']; ?>">
                <label for="outdoor">
                    Outdoor Space Availability
                </label>
                <input type="text" id="outdoor" name="outdoor" value="<?php echo $row['outdoor']; ?>">
                <label for="in_out">
                    Indoor & Outdoor
                </label>
                <input type="text" id="in_out" name="in_out" value="<?php echo $row['in_out']; ?>">
                <label for="about">
                    About Venue
                </label>
                <input type="textarea" id="about" name="about" value="<?php echo $row['about']; ?>">
                <input type="submit" name="submit" Value="Done" class="btn-update-banquet">
                <a href="admin_home.php" class="btn-back-banquet">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>