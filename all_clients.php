<?php
    session_start();
    include "config.php";
    $id = $_SESSION['id'];
    if(!isset($id))
    {
        header("location:admin_login.php");
    }
    $query = "SELECT * FROM `clients`";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Clients List
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .navbar-brand{
                font-size: 33px;
                margin-left: 200px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .card{
                width: 1400px;
                margin-left: 65px;
                margin-top: 30px;
                border: 1px solid rgba(0,0,0,.125);
                border-radius: 5px;
            }

            .btn-back{
                color: #ff1d8e;
                background-color: white;
                text-decoration: none;
                font-size: 17px;
                padding-top: 7px;
                padding-bottom: 7px;
                padding-right: 20px;
                padding-left: 20px;
                border-radius: 5px;
                border: 1px solid #ff1d8e;
                margin-right: 200px;
            }

            .btn-back:hover, .btn-back:focus{
                color: white;
                background-color: grey;
            }

            .btn-delete{
                color: white;
                background-color: #031273;
                text-decoration: none;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-right: 30px;
                padding-left: 30px;
                border-radius: 5px;  
                border: 1px solid #031273;              
            }

            .btn-delete:hover, .btn-delete:focus{
                color: #031273;
                background-color: white;
            }

            .card-header{
                color: white;
                background-color: #008631;
            }

            .email{
                color: #ff1d8e;
                font-size: 20px;
            }

            .email-p{
                color: grey;
                font-size: 16px;
            }

            .contact{
                color: #ff1d8e;
                font-size: 20px;
            }

            .contact-p{
                color: grey;
                font-size: 16px;
            }

            .address{
                color: #ff1d8e;
                font-size: 20px;
            }

            .address-p{
                color: grey;
                font-size: 16px;
                padding-bottom: 15px;
            }

        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    Clients List
                </a>
                <a href="client_home.php" class="btn-back">
                    Back
                </a>
            </div>
        </nav>

        <?php
            $i = 0;
            while($data=mysqli_fetch_assoc($result))
            {
                if($i==0)
                {
        ?>

        <div class="card">
            <h4 class="card-header">
                <?php
                    echo $data['name'];
                ?>
            </h4>
            <div class="card-body">
                <h6 class="email">
                    Email :
                    <label for="email-p" class="email-p">
                        <?php
                            echo $data['email'];
                        ?>
                    </label>
                </h6>
                <h6 class="contact">
                    Contact :
                    <label for="contact-p" class="contact-p">
                        <?php
                            echo $data['contact'];
                        ?>
                    </label>
                </h6>
                <h6 class="address">
                    Address :
                    <label for="address-p" class="address-p">
                        <?php
                            echo $data['address'];
                        ?>
                    </label>
                </h6>
                <a href="delete_profile.php" class="btn-delete">
                    Delete
                </a>
            </div>
        </div>
        
        <?php
                }

                else
                {
        ?>

        <div class="card">
            <h4 class="card-header">
                <?php
                    echo $data['name'];
                ?>
            </h4>
            <div class="card-body">
                <h6 class="email">
                    Email :
                    <label for="email-p" class="email-p">
                        <?php
                            echo $data['email'];
                        ?>
                    </label>
                </h6>
                <h6 class="contact">
                    Contact :
                    <label for="contact-p" class="contact-p">
                        <?php
                            echo $data['contact'];
                        ?>
                    </label>
                </h6>
                <h6 class="address">
                    Address :
                    <label for="address-p" class="address-p">
                        <?php
                            echo $data['address'];
                        ?>
                    </label>
                </h6>
                <a href="delete_profile.php?id=<?php echo $data['id']; ?>" class="btn-delete">
                    Delete
                </a>
            </div>
        </div>

        <?php
                } 
                $i++;
            }
        ?>
        <script src="js/bootstrap.js"></script>
    </body>
</html>