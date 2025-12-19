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
        $bridal_makeup = $_POST['bridal_makeup'];
        $airbrush = $_POST['airbrush'];
        $party_family = $_POST['party_family'];
        $engagement = $_POST['engagement'];
        $outstation = $_POST['outstation'];
        $about = $_POST['about'];

        if(file_exists("img/".$_FILES['img']['name']))
        {
            $filename = $_FILES['img']['name'];
            $_SESSION['status'] = "Image Already Exists...".$filename;
        }

        else
        {
            $insert = "INSERT INTO `makeup_hair`(`name`,`location`,`img`,`bridal_makeup`,`airbrush`,`party_family`,`engagement`,`outstation`,`about`) VALUES('$name','$location','$img','$bridal_makeup','$airbrush','$party_family','$engagement','$outstation','$about')";
            $result = mysqli_query($con, $insert);
        }

        if($result)
        {
            move_uploaded_file($_FILES['img']['tmp_name'],"img/".$_FILES['img']['name']);
            $_SESSION['status'] = "Successfully...";
            header("location:add_makeup_hair.php");
        }

        else
        {
            $_SESSION['status'] = "Not Successfully...";
            header("location:add_makeup_hair.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Add Makeup & Hairstyle Vendors
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="form-container-makeup">
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
            <form action="add_makeup_hair.php" method="post" enctype="multipart/form-data">
                <h3>
                Add Makeup & Hairstyle Vendors
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
                <label for="bridal_makeup">
                    Bridal Makeup
                </label>
                <input type="text" id="bridal_makeup" name="bridal_makeup" placeholder="Enter Price">
                <label for="airbrush">
                    Airbrush Makeup
                </label>
                <input type="text" id="airbrush" name="airbrush" placeholder="Enter Price">
                <label for="party_family">
                    Party Makeup For Family
                </label>
                <input type="text" id="party_family" name="party_family" placeholder="Enter Price">
                <label for="engagement">
                    Engagement Makeup
                </label>
                <input type="text" id="engagement" name="engagement" placeholder="Enter Price">
                <label for="outstation">
                    Outstation Makeup Charges
                </label>
                <input type="text" id="outstation" name="outstation" placeholder="Enter Price">
                <label for="about">
                    About Vendor
                </label>
                <input type="textarea" id="about" name="about" placeholder="About Vendor">
                <input type="submit" name="submit" Value="Add Vendor" class="btn-add-makeup">
                <a href="admin_makeup_hair.php" class="btn-all-makeup">
                    Show All Makeup & Hairstyle Vendors
                </a>&nbsp
                <a href="admin_home.php" class="btn-back-home">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>