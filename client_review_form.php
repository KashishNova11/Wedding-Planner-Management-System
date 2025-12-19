<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:client_login.php");
    }
    include "config.php";
    if(isset($_POST['submit']))
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $review = $_REQUEST['review'];

        $insert = "INSERT INTO `reviews`(`name`,`email`,`review`) VALUES('$name','$email','$review')";

        $result = mysqli_query($con,$insert);
    }

    $id = $_SESSION['id'];
    $query = "SELECT * FROM `clients` WHERE `id` = '$id'";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($result);
?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Review Page
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .form-container-review form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            background-color: white;
            text-align: center;
            margin-top: 110px;
            margin-left: 400px;
            width: 750px;
            }

            .form-container-review form h3{
            font-size: 30px;
            margin-bottom: 10px;
            color: white;
            background-color: #031273;
            border: 1px solid #031273;
            padding-top: 7px;
            padding-bottom: 7px;
            border-radius: 5px;
            }

            .form-container-review label{
            font-size: 18px;
            display: block;
            text-align: left;
            margin-top: 10px;
            color: #031273;
            }

            .form-container-review form input{
            width: 100%;
            padding: 10px 15px;
            font-size: 18px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-width: 0;
            border-radius: 5px;
            }

            .form-container-review form .form-control{
                font-size: 18px;
                margin: 8px 0;
                background-color: #d0c9ea;
                border-width: 0;
                border-radius: 5px;  
            }

            .form-container-review form .form-btn{
                color: white;
                background-color: #ff1d8e;
                width: 150px;
                margin-left: -405px;
                border: 1px solid #ff1d8e;
            }

            .form-container-review form .form-btn:hover ,.form-container-review form .form-btn:focus{
                color: #ff1d8e;
                background-color: white;
            }

            .form-container-review form .back{
                color: white;
                background-color: #031273;
                text-decoration: none;
                padding-top: 12px;
                padding-bottom: 12px;
                padding-right: 55px;
                padding-left: 55px;
                border: 1px solid #031273;
                border-radius: 5px;
                margin-left: 4px;
            }

            .form-container-review form .back:hover ,.form-container-review form .back:focus{
                color: #031273;
                background-color: white;
            }
        </style>
    </head>
    <body>
    <div class="form-container-review">
            <form action="" method="post">
                <h3>
                    How Was Your Experience?
                </h3>
                <label for="name">
                    Name
                </label>
                <input type="name" id="name" name="name" value="<?php echo $data['name']; ?>" required>
                <label for="email">
                    Email
                </label>
                <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>" required>
                <label for="message">
                    Message
                </label>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="review" rows="5" placeholder="Write Review..." required></textarea>
                </div>
                <input type="submit" name="submit" Value="Post" class="form-btn">
                <a href="reviews.php" class="back"> 
                    Back 
                </a>
            </form>
        </div>
    </body>
</html>