<?php
    session_start();
    include "config.php";
    $id=$_SESSION['id'];
    if(!isset($id))
    {
        header("location:client_login.php");
    }
    $query="SELECT * FROM `clients` WHERE `id` = '$id'";
    $result = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($result);

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];

        $query = "UPDATE `clients` SET `name` = '$name' , `email` = '$email' , `contact` = '$contact' , `address` = '$address' WHERE `id` = '$id'";
        $result = mysqli_query($con, $query);

        if($result)
        {
            header("location:client_profile.php?profile_update=Update Profile");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Update Profile
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .form-container form .form-control{
            font-size: 18px;
            margin: 8px 0;
            background-color: #feb3cd;
            border-width: 0;
            color: black;
            border-radius: 5px;  
            }

        </style>
    </head>
    <body>
    <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>
                    Update Profile
                </h3>
                <label for="name">
                    Name
                </label>
                <input type="text" id="name" name="name" value="<?=$data['name']; ?>">
                <label for="email">
                    Email
                </label>
                <input type="email" id="email" name="email" value="<?=$data['email']; ?>">
                <label for="contact">
                    Contact
                </label>
                <input type="tel" id="contact" name="contact" value="<?=$data['contact']; ?>">
                <label for="address">
                    Address
                </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="5" value="<?=$data['address'];?>"></textarea>
                <input type="submit" name="submit" Value="Update Profile" class="form-btn">
            </form>
        </div>
    </body>
</html>