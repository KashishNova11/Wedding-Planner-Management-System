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
        $query = "SELECT * FROM `makeup_hair` WHERE `id`='$id'";
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
        $img = $_POST['img'];
        $bridal_makeup = $_POST['bridal_makeup'];
        $airbrush = $_POST['airbrush'];
        $party_family = $_POST['party_family'];
        $engagement = $_POST['engagement'];
        $outstation = $_POST['outstation'];
        $about = $_POST['about'];

        $query = "UPDATE `makeup_hair` SET `name`='$name',`location`='$location',`img`='$img',`bridal_makeup`='$bridal_makeup',`airbrush`='$airbrush',`party_family`='$party_family',`engagement`='$engagement',`oustation`='$outstation',`about`='$about' WHERE `id` = '$id_new'";
        
        $result = mysqli_query($con, $query);

        if(!$result)
        {
            die("Query Failled...".mysqli_error());
        }

        else
        {
            header("location:admin_makeup_hair.php?update_msg=Data Updated Successfully...");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Update Photographer
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="form-container-makeup">
            <form action="edit_makeup_hair.php?id_new=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <h3>
                    Update Photographer
                </h3>
                <label for="name">
                    Name
                </label>
                <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
                <label for="location">
                    Location
                </label>
                <input type="text" id="location" name="location" value="<?php echo $row['location']; ?>">
                <label for="image">
                    Photo
                </label>
                <input type="file" name="img" id="image" accept="img/*" value="<?php echo $row['img']; ?>">
                <label for="bridal_makeup">
                    Bridal Makeup
                </label>
                <input type="text" id="bridal_makeup" name="bridal_makeup" value="<?php echo $row['img']; ?>">
                <label for="airbrush">
                    Airbrush Makeup
                </label>
                <input type="text" id="airbrush" name="airbrush" value="<?php echo $row['airbrush']; ?>">
                <label for="party_family">
                    Party Makeup For Family
                </label>
                <input type="text" id="party_family" name="party_family" value="<?php echo $row['party_family']; ?>">
                <label for="engagement">
                    Engagement Makeup
                </label>
                <input type="text" id="engagement" name="engagement" value="<?php echo $row['engagement']; ?>">
                <label for="outstation">
                    Outstation Makeup Charges
                </label>
                <input type="text" id="outstation" name="outstation" value="<?php echo $row['outstation']; ?>">
                <label for="about">
                    About Vendors
                </label>
                <input type="textarea" id="about" name="about" value="<?php echo $row['about']; ?>">
                <input type="submit" name="submit" Value="Done" class="btn-update-makeup">
                <a href="admin_home.php" class="btn-back-makeup">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>