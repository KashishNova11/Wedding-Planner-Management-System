<?php
    include "config.php";
    session_start();
    $message = $link='';
    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $query="SELECT * FROM `clients` WHERE email='$email'";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row['id'];
                $id_encode=base64_encode($id);
                $link="<a href='client_reset_password.php?MnoprQtPNFS=$id_encode' class='text-decoration-none forget-button'>Receive Mail</a>";
            }
        }
        else 
        {
            $message="<br><div class='alert alert-danger h4'> Invalid Email !!!</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Forget Password
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .form-container{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background-color: white;
            }

            .form-container form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            background-color: white;
            text-align: center;
            width: 40%;
            }

            .form-container form h3{
            font-size: 30px;
            margin-bottom: 10px;
            color: white;
            background-color: #031273;
            border: 1px solid #031273;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 5px;
            }

            .form-container form input {
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-width: 0;
            border-radius: 5px;
            }

            .form-container form input:hover, .form-container form input:focus {
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-width: 0;
            border-radius: 5px;
            }

            .form-container form .old{
                margin-top: 20px;
            }

            .form-container form .new{
                margin-top: 20px;
            }

            .form-container form .confirm{
                margin-top: 20px;
            }

            .form-container form .form-control{
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-width: 0;
            border-radius: 5px; 
            }

            .form-container form p{
            margin-top: 10px;
            font-size: 20px;
            color: #ff1d8e;
            }


            .form-container form p a{
            color: black;
            }

            .form-container form p a:hover{
            color: blue;
            }

            .form-container form .change{
                color: black;
                margin-top: 10px;
            }

            .form-container form .email{
                margin-top: 20px;
            }

            .form-container label{
            font-size: 18px;
            display: block;
            text-align: left;
            margin-top: 10px;
            color: #031273;
            }

            .form-container form .btn-submit{
                color: white;
                background-color: #ff1d8e;
                width: 100%;
                border: 1px solid #ff1d8e;
            }

            .form-container form .btn-submit:hover, .form-container form .btn-submit:focus{
                color: #ff1d8e;
                background-color: white;
                border: 1px solid #ff1d8e;
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <form action="" method="post">
                <h3>
                    Forget Password
                </h3>
                <?php echo $message; ?>
                <label for="email" class="email"> 
                    Email 
                </label>
                <input class="input" type="email" id="email" name="email" placeholder="Enter Your Email" required/>
                <h5 class="change">
                    <a href="client_change_password.php" class="change">
                        Change Password ?
                    </a>
                    <input type="submit" name="submit" class="form-btn" value="Done">
                    
                        <?php echo $link;?>
                </h5>
            </form>
        </div>
    </body>
</html>