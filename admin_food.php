<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }
    include "config.php";
    $query = "SELECT * FROM `food`";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Admin Food & Careteres
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .btn-add-food-admin{
            color: #031273;
            background-color: white;
            text-decoration: none;
            border: 1px solid white;
            border-radius: 5px;
            font-size: 17px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 7px;
            padding-bottom: 7px;
            margin-left: 680px;
            }

            .btn-add-food-admin:hover, .btn-add-food-admin:focus{
            color: white;
            background-color: grey;
            }

            .card-body .btn-edit-food{
            color: white;
            background-color: #008631;
            text-decoration: none;
            margin-left: 600px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 5px;
            margin-top: 20px;
            border: 1px solid #008631;
            }

            .card-body .btn-edit-food:hover, .card-body .btn-edit-food:focus{
            color: #008631;
            background-color: white;
            border-radius: 5px;
            border: 1px solid #008631;
            }

            .card-body .btn-delete-food{
            color: white;
            background-color: #031273;
            text-decoration: none;
            margin-left: 7px;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #031273;
            }

            .card-body .btn-delete-food:hover, .card-body .btn-delete-food:focus{
            color: #031273;
            background-color: white;
            border-radius: 5px;
            border: 1px solid #031273;
            }
        </style>
    </head>
    <body>
        <div class="admin-food" style="padding-left:150px; background-color: #031273; color: white; padding-top: 10px; padding-bottom: 10px;">
            <h2>
                Food & Caterers List
                <a href="add_food.php" class="btn-add-food-admin">
                    Add Food & Caterers
                </a>
                <a href="admin_home.php" class="btn-back-admin">
                    Back
                </a>
            </h2>
        </div>

        <div class="accordion" id="accordionExample" style="width: 1400px; margin-left: 70px; background-color: white; margin-top: 30px;" >
            <div class="accordion-item">
                <?php
                    $i = 0;
                    while($data=mysqli_fetch_array($result))
                    {
                        if($i==0)
                        {
                ?>
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: #ff1d8e;">
                        <label for="name" style="color: white;">
                        <?php 
                            echo $data['name'];
                        ?>
                        </label>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="margin-top: 10px; margin-left: 10px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo "img/".$data['img']; ?>" class="img-fluid rounded-start" alt="..." style="margin-top: 20px;">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                <label for="name" style="color: black;">
                                    <?php 
                                        echo $data['name'];
                                    ?>
                                </label>
                                </h5>
                                <label for="location" style="color: #ff1d8e;">
                                    Location : &nbsp
                                </label>
                                <label for="location" style="color: grey;">
                                <?php 
                                    echo $data['location'];
                                ?>
                                </label>
                                <br>
                                <label for="veg" style="color: #ff1d8e;">
                                    Veg Price : &nbsp
                                </label>
                                <label for="veg" style="color: grey;">
                                <?php 
                                    echo $data['veg'];
                                ?>
                                </label>
                                <br>
                                <label for="non_veg" style="color: #ff1d8e;">
                                    Non-Veg Price : &nbsp
                                </label>
                                <label for="non_veg" style="color: grey;">
                                <?php 
                                    echo $data['non_veg'];
                                ?>
                                </label>
                                <br>
                                <label for="about" style="color: grey;">
                                <?php 
                                    echo $data['about'];
                                ?>
                                <br>
                                <br>
                                <a href="edit_food.php?id=<?php echo $data['id']; ?>" class="btn-edit-food" tabindex="-1" role="button" aria-disabled="true">
                                    Edit
                                </a>
                                <a href="delete_food.php?id=<?php echo $data['id']; ?>" class="btn-delete-food" tabindex="-1" role="button" aria-disabled="true">
                                    Delete
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }

                    else
                    {
            ?>
            <div class="accordion-item" style="width: 1400px; margin-left: 70px; background-color: white; margin-top: 30px;">
                <h2 class="accordion-header" id="heading<?php echo $data['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $data['id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $data['id']; ?>" style="background-color: #ff1d8e;">
                        <label for="name" style="color: white;">
                        <?php 
                            echo $data['name'];
                        ?>
                        </label>
                    </button>
                </h2>
                <div id="collapse<?php echo $data['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $data['id']; ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="card mb-3" style="width: 1350px; border: none; margin-left: 10px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo "img/".$data['img']; ?>" class="img-fluid rounded-start" alt="" style="margin-top: 20px;">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                <label for="name" style="color: black;">
                                    <?php 
                                        echo $data['name'];
                                    ?>
                                </label>
                                </h5>
                                <label for="location" style="color: #ff1d8e;">
                                    Location : &nbsp
                                </label>
                                <label for="location" style="color: grey;">
                                <?php 
                                    echo $data['location'];
                                ?>
                                </label>
                                <br>
                                <label for="veg" style="color: #ff1d8e;">
                                    Veg Price : &nbsp
                                </label>
                                <label for="veg" style="color: grey;">
                                <?php 
                                    echo $data['veg'];
                                ?>
                                </label>
                                <br>
                                <label for="non_veg" style="color: #ff1d8e;">
                                    Non-Veg Price : &nbsp
                                </label>
                                <label for="non_veg" style="color: grey;">
                                <?php 
                                    echo $data['non_veg'];
                                ?>
                                </label>
                                <br>
                                <label for="about" style="color: grey;">
                                <?php 
                                    echo $data['about'];
                                ?>
                                <br>
                                <br>
                                <a href="edit_food.php?id=<?php echo $data['id']; ?>" class="btn-edit-food" tabindex="-1" role="button" aria-disabled="true">
                                    Edit
                                </a>
                                <a href="delete_food.php?id=<?php echo $data['id']; ?>" class="btn-delete-food" tabindex="-1" role="button" aria-disabled="true">
                                    Delete
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }

                $i++;
            }
            ?>
        </div>

        <script src="js/bootstrap.js"></script>
    </body>
</html>