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
        $bridal_price = $_POST['bridal_price'];
        $about = $_POST['about'];

        if(file_exists("img/".$_FILES['img']['name']))
        {
            $filename = $_FILES['img']['name'];
            $_SESSION['status'] = "Image Already Exists...".$filename;
        }

        else
        {
            $insert = "INSERT INTO `mehndi`(`name`,`location`,`img`,`bridal_price`,`about`) VALUES('$name','$location','$img','$bridal_price','$about')";
            $result = mysqli_query($con, $insert);
        }

        if($result)
        {
            move_uploaded_file($_FILES['img']['tmp_name'],"img/".$_FILES['img']['name']);
            $_SESSION['status'] = "Successfully...";
            header("location:add_mehndi.php");
        }

        else
        {
            $_SESSION['status'] = "Not Successfully...";
            header("location:add_mehndi.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Add Mehndi
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="form-container-mehndi">
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
            <form action="add_mehndi.php" method="post" enctype="multipart/form-data">
                <h3>
                    Add Mehndi
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
                <label for="bridal_price">
                    Bridal Mehndi Price
                </label>
                <input type="text" id="bridal_price" name="bridal_price" placeholder="Enter Price">
                <label for="about">
                    About Vendor
                </label>
                <input type="textarea" id="about" name="about" placeholder="About Vendor">
                <input type="submit" name="submit" Value="Add Vendor" class="btn-add-mehndi">
                <a href="admin_mehndi.php" class="btn-all-mehndi">
                    Show All Mehndi Artist
                </a>&nbsp
                <a href="admin_home.php" class="btn-back-home">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>