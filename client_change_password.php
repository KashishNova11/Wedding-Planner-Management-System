<?php
    session_start();
    include "config.php";
    $id=$_SESSION['id'];
    if(!isset($id))
    {
        header("location:client_login.php");
    }
    $query="SELECT * FROM `clients` WHERE id='$id'";
    $result=mysqli_query($con,$query);
    $data=mysqli_fetch_array($result);

    if(isset($_POST['submit']))
    {
        $old_pwd=$_POST['old_pwd'];
        $prev_pwd=$_POST['prev_pwd'];
        $new_pwd=$_POST['new_pwd'];
        $confirm_pwd=$_POST['confirm_pwd'];

        if(!empty($prev_pwd)||!empty($new_pwd)||!empty($confirm_pwd))
        {
            if($prev_pwd!=$old_pwd)
            {
                $message[]="Old Password Not Matched";
            }
            elseif($new_pwd==$old_pwd)
            {
                $message[]="New Password is same as Previous Password";
            }
            elseif($new_pwd!=$confirm_pwd)
            {
                $message[]="Confirm Password Not Matched";
            }
            else 
            {
                $query="UPDATE `clients` SET pwd='$new_pwd',c_pwd='$confirm_pwd' WHERE id='$id'";
                $result=mysqli_query($con,$query);
                header("location:client_login.php");
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Change Passowrd
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
                    Change Password
                </h3>
                <h4>
                    <?php
                    if(isset($message))
                    {
                        foreach($message as $msg)
                        {
                            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
                            echo $msg;
                            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'><span aria-hidden='true'></span></button>";
                        }
                    }
                    ?>
                </h4>
                <input type="hidden" name="old_pwd" value="<?=$data['pwd'];?>">
                <label for="prev_pwd" class="old">
                    Previous Password
                </label>
                <input type="password" id="prev_pwd" name="prev_pwd" placeholder="Enter Previous Password" required>
                <label for="new_pwd" class="new">
                    New Password
                </label>
                <input type="password" id="new_pwd" name="new_pwd" placeholder="Enter New Password" required>
                <label for="confirm_pwd" class="confirm">
                    Confirm Password
                </label>
                <input type="password" id="confirm_pwd" name="confirm_pwd" placeholder="Enter Confirm Password" required>
                <p>
                    <a href="forget_pwd.php">
                        Forget Password?
                    </a>
                </p>
                <input type="submit" name="submit" Value="Done" class="btn-submit">
            </form>
        </div>
    </body>
</html>