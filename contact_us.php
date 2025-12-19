<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:client_login.php");
    }

    include "config.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];

        $insert = "INSERT INTO `contact_us`(`name`,`email`,`contact`,`message`) VALUES('$name','$email','$contact','$message')";
        $result = mysqli_query($con, $insert);
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
            Contact Us
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .form-container-contact{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background-color: white;
            }

            .form-container-contact form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            background-color: white;
            text-align: center;
            width: 40%;
            }

            .form-container-contact form h3{
            font-size: 30px;
            margin-bottom: 10px;
            color: white;
            background-color: #031273;
            border: 1px solid #031273;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 5px;
            }

            .form-container-contact form input {
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-width: 0;
            border-radius: 5px;
            }

            .form-container-contact form .form-control{
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-width: 0;
            border-radius: 5px; 
            }

            .form-container-contact form p{
            margin-top: 10px;
            font-size: 20px;
            color: #ff1d8e;
            }

            .form-container-contact form p a{
            color: black;
            }

            .form-container-contact form p a:hover{
            color: blue;
            }

            .form-container-contact label{
            font-size: 18px;
            display: block;
            text-align: left;
            margin-top: 10px;
            color: #031273;
            }

            .form-container-contact form .btn-submit{
                color: white;
                background-color: #ff1d8e;
                width: 150px;
                margin-left: -255px;
                border: 1px solid #ff1d8e;
            }

            .form-container-contact form .btn-submit:hover, .form-container-contact form .btn-submit:focus{
                color: #ff1d8e;
                background-color: white;
            }

            .form-container-contact form .back-client{
                color: white;
                background-color: #031273;
                text-decoration: none;
                border: 1px solid #031273;
                border-radius: 5px;
                padding-top: 12px;
                padding-bottom: 12px;
                padding-right: 33px;
                padding-left: 33px;
            }

            .form-container-contact form .back-client:hover, .form-container-contact form .back-client:focus{
                color: #031273;
                background-color: white;
            }

        </style>
    </head>
    <body>
        <div class="form-container-contact">
            <form action="" method="post">
                <h3>
                    Contact Us
                </h3>
                <label for="name">
                    Name
                </label>
                <input type="text" id="name" name="name" value="<?php echo $data['name']; ?>" readonly required>
                <label for="email">
                    Email
                </label>
                <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>" readonnly required>
                <label for="contact">
                    Contact
                </label>
                <input type="tel" id="contact" name="contact" value="<?php echo $data['contact']; ?>" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57" readonly required>
                <label for="message">
                    Message
                </label>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" placeholder="Write Message..." required></textarea>
                </div>
                <input type="submit" name="submit" Value="Done" class="btn-submit">
                <a href="client_home.php" class="back-client">
                    Back Home
                </a>
            </form>
        </div>
    </body>
</html>