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
        $query = "SELECT * FROM `food` WHERE `id`='$id'";
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
        $veg = $_POST['veg'];
        $non_veg = $_POST['non_veg'];
        $about = $_POST['about'];

        $query = "UPDATE `food` SET `name`='$name',`location`='$location',`img`='$img',`veg`='$veg',`non_veg`='$non_veg',`about`='$about' WHERE `id` = '$id_new'";
        
        $result = mysqli_query($con, $query);

        if(!$result)
        {
            die("Query Failled...".mysqli_error());
        }

        else
        {
            header("location:admin_food.php?update_msg=Data Updated Successfully...");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Update Food & Caterers
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .form-container-food{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background-color: white;
            }

            .form-container-food form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            background-color: white;
            text-align: center;
            width: 1200px;
            }

            .form-container-food form h3{
            font-size: 30px;
            margin-bottom: 10px;
            background-color: #031273;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            }

            .form-container-food form input{
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-radius: 5px;
            border: none;
            }

            .form-container-food form input:hover, .form-container-food form input:focus{
            color: black;
            border-width: 0;
            border-radius: 5px;
            border-color: none;
            }

            .form-container-food label{
            font-size: 18px;
            display: block;
            text-align: left;
            margin-top: 10px;
            color: #031273;
            }

            .form-container-food .btn-update-food{
            width: 150px;
            background-color: #ff1d8e;
            color: white;
            margin-right: 7px;
            border: 1px solid #ff1d8e;
            }

            .form-container-food .btn-update-food:hover, .form-container-food .btn-update-food:focus{
            color: #ff1d8e;
            background-color: white;
            border: 1px solid #ff1d8e;
            }

            .form-container-food .btn-back-food{
            color: white;
            background-color: #031273;
            text-decoration: none;
            margin-left: -5px;
            margin-right: 840px;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 12px;
            padding-bottom: 12px;
            border: 1px solid #031273;
            border-radius: 5px;
            }

            .form-container-food .btn-back-food:hover, .form-container-food .btn-back-food:focus{
            color: #031273;
            background-color: white;
            }
        </style>
    </head>
    <body>
        <div class="form-container-food">
            <form action="edit_food.php?id_new=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <h3>
                    Update Food & Caterers
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
                <label for="veg">
                    Veg Price
                </label>
                <input type="text" id="veg" name="veg" value="<?php echo $row['veg']; ?>">
                <label for="non_veg">
                    Non-Veg Price
                </label>
                <input type="text" id="non_veg" name="non_veg" value="<?php echo $row['non_veg']; ?>">
                <label for="about">
                    About Venue
                </label>
                <input type="textarea" id="about" name="about" value="<?php echo $row['about']; ?>">
                <input type="submit" name="submit" Value="Done" class="btn-update-food">
                <a href="admin_home.php" class="btn-back-food">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>