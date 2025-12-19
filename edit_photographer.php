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
        $query = "SELECT * FROM `photographer` WHERE `id`='$id'";
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
        $photo_pkg = $_POST['photo_pkg'];
        $photo_video_pkg = $_POST['photo_video_pkg'];
        $about = $_POST['about'];

        $query = "UPDATE `photographer` SET `name`='$name',`location`='$location',`img`='$img',`photo_pkg`='$photo_pkg',`photo_video_pkg`='$photo_video_pkg',`about`='$about' WHERE `id` = '$id_new'";
        
        $result = mysqli_query($con, $query);

        if(!$result)
        {
            die("Query Failled...".mysqli_error());
        }

        else
        {
            header("location:admin_photographer.php?update_msg=Data Updated Successfully...");
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
        <div class="form-container-photographer">
            <form action="edit_photographer.php?id_new=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
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
                <label for="photo_pkg">
                    Photo Package
                </label>
                <input type="text" id="photo_pkg" name="photo_pkg" value="<?php echo $row['photo_pkg']; ?>">
                <label for="photo_video_pkg">
                    Photo + Video Package
                </label>
                <input type="text" id="photo_video_pkg" name="photo_video_pkg" value="<?php echo $row['photo_video_pkg']; ?>">
                <label for="about">
                    About Venue
                </label>
                <input type="textarea" id="about" name="about" value="<?php echo $row['about']; ?>">
                <input type="submit" name="submit" Value="Done" class="btn-update-photographer">
                <a href="admin_home.php" class="btn-back-photographer">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>