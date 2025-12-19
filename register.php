<?php
    include "config.php";
    if(isset($_POST['submit']))
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $pwd = $_REQUEST['pwd'];
        $c_pwd = $_REQUEST['c_pwd'];
        $contact = $_REQUEST['contact'];
        $address = $_REQUEST['address'];

        $insert = "INSERT INTO `clients`(`name`,`email`,`pwd`,`c_pwd`,`contact`,`address`) VALUES('$name','$email','$pwd','$c_pwd','$contact','$address')";

        $result = mysqli_query($con,$insert);
        header("location:client_login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Register 
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .form-container form .form-control{
            font-size: 18px;
            margin: 8px 0;
            background-color: #feb3cd;
            border-width: 0;
            border-radius: 5px;  
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <form action="" method="post">
                <h3>
                    Register Now
                </h3>
                <label for="name">
                    Name
                </label>
                <input type="text" id="name" name="name" placeholder="Full Name" required>
                <label for="email">
                    Email
                </label>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <label for="pwd">
                    Password
                </label>
                <input type="password" id="pwd" name="pwd" placeholder="Password" required>
                <label for="c_pwd">
                    Confirm Password
                </label>
                <input type="password" id="c_pwd" name="c_pwd" placeholder="Confirm Password" required>
                <label for="contact">
                    Contact
                </label>
                <input type="tel" id="contact" name="contact" placeholder="Enter Contact No." maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57" required>
                <label for="address">
                    Address
                </label>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="5" placeholder="Enter Address..." required></textarea>
                </div>
                <input type="submit" name="submit" Value="Register" class="form-btn">
                <p>
                    Already Have An Account?
                    <a href="client_login.php">
                        Login Now
                    </a>
                </p>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
