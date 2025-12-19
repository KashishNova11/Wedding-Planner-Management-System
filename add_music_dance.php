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
        $starting_price = $_POST['starting_price'];
        $about = $_POST['about'];

        if(file_exists("img/".$_FILES['img']['name']))
        {
            $filename = $_FILES['img']['name'];
            $_SESSION['status'] = "Image Already Exists...".$filename;
        }

        else
        {
            $insert = "INSERT INTO `music_dance`(`name`,`location`,`img`,`starting_price`,`about`) VALUES('$name','$location','$img','$starting_price','$about')";
            $result = mysqli_query($con, $insert);
        }

        if($result)
        {
            move_uploaded_file($_FILES['img']['tmp_name'],"img/".$_FILES['img']['name']);
            $_SESSION['status'] = "Successfully...";
            header("location:add_music_dance.php");
        }

        else
        {
            $_SESSION['status'] = "Not Successfully...";
            header("location:add_music_dance.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Add Music & Dance Vendors
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .form-container-music{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background-color: white;
            }

            .form-container-music form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            background-color: white;
            text-align: center;
            width: 1200px;
            }

            .form-container-music form h3{
            font-size: 30px;
            margin-bottom: 10px;
            background-color: #031273;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            }

            .form-container-music form input{
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-radius: 5px;
            border: none;
            }

            .form-container-music form input:hover, .form-container-music form input:focus{
            color: black;
            border-width: 0;
            border-radius: 5px;
            border-color: none;
            }

            .form-container-music label{
            font-size: 18px;
            display: block;
            text-align: left;
            margin-top: 10px;
            color: #031273;
            }

            .form-container-music .btn-add-music{
            width: 150px;
            background-color: #ff1d8e;
            color: white;
            margin-right: 900px;
            margin-left: -520px;
            border: 1px solid #ff1d8e;
            padding-left: 15px;
            }

            .form-container-music .btn-add-music:hover{
            background-color: white;
            color: #ff1d8e;
            border: 1px solid #ff1d8e;
            }

            .form-container-music .btn-all-music{
            color: white;
            text-decoration: none;
            margin-left: -900px;
            background-color: #008631;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-right: 40px;
            padding-left: 40px;
            border-radius: 5px;
            border: 1px solid #008631;
            }

            .form-container-music .btn-all-music:hover, .form-container-music .btn-all-music:focus{
            color: #008631;
            background-color: white;
            border: 1px solid #008631; 
            }

            .form-container-music .btn-back-home{
            color: white;
            background-color: #031273;
            text-decoration: none;
            margin-left: -5px;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 12px;
            padding-bottom: 12px;
            border: 1px solid #031273;
            border-radius: 5px;
            }

            .form-container-music .btn-back-home:hover, .form-container-music .btn-back-home:focus{
            color: #031273;
            background-color: white;
            border: 1px solid #031273;
            }
        </style>
    </head>
    <body>
        <div class="form-container-music">
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
            <form action="add_music_dance.php" method="post" enctype="multipart/form-data">
                <h3>
                    Add Music & Dance Vendors
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
                <label for="starting_price">
                    Starting Price
                </label>
                <input type="text" id="starting_price" name="starting_price" placeholder="Enter Price">
                <label for="about">
                    About Vendor
                </label>
                <input type="textarea" id="about" name="about" placeholder="About Vendor">
                <input type="submit" name="submit" Value="Add Vendor" class="btn-add-music">
                <a href="admin_music_dance.php" class="btn-all-music">
                    Show All Music & Dance Vendors
                </a>&nbsp
                <a href="admin_home.php" class="btn-back-home">
                    Back Home 
                </a>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>