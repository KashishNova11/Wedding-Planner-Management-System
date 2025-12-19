<?php
    include "config.php";
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $sql = "SELECT * FROM `clients` WHERE `email`='$email' AND `pwd`='$pwd'";
        $result = mysqli_query($con,$sql);
        $data = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);

        if($count > 0)
        {
            session_start();
            $_SESSION['id']=$data['id'];
            header("location:client_home.php");
        }
        else
        {
            echo "<script>alert('Check Your Email & Password!');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Login 
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="form-container">
            <form action="" method="post">
                <h3>
                    Login Now
                </h3>
                <label for="email">
                    Email
                </label>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <label for="pwd">
                    Password
                </label>
                <input type="password" id="pwd" name="pwd" placeholder="Password" required>
                <p>
                    <a href="client_forget_password.php">
                        Forget Password?
                    </a>
                </p>
                <input type="submit" name="submit" Value="Login" class="form-btn">
                <p>
                    Don't Have An Account?
                    <a href="register.php">
                        Register Now
                    </a>
                </p>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>