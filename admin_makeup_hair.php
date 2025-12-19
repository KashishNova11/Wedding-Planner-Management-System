<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:admin_login.php");
    }
    include "config.php";
    $query = "SELECT * FROM `makeup_hair`";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Admin Makeup & Hairstyle Vendors
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="admin-makeup-hair" style="padding-left:150px; background-color: #031273; color: white; padding-top: 10px; padding-bottom: 10px;">
            <h2>
                Makeup & Hairstyle Vendors List
                <a href="add_makeup_hair.php" class="btn-add-makeup-admin">
                    Add Makeup & Hairstyle Vendors
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
                                <label for="bridal_makeup" style="color: #ff1d8e;">
                                    Bridal Makeup : &nbsp
                                </label>
                                <label for="bridal_makeup" style="color: grey;">
                                <?php 
                                    echo $data['bridal_makeup'];
                                ?>
                                </label>
                                <br>
                                <label for="airbrush" style="color: #ff1d8e;">
                                    Airbrush Makeup : &nbsp
                                </label>
                                <label for="airbrush" style="color: grey;">
                                <?php 
                                    echo $data['airbrush'];
                                ?>
                                </label>
                                <br>
                                <label for="party_family" style="color: #ff1d8e;">
                                    Party Makeup For Family : &nbsp
                                </label>
                                <label for="party_family" style="color: grey;">
                                <?php 
                                    echo $data['party_family'];
                                ?>
                                </label>
                                <br>
                                <label for="engagement" style="color: #ff1d8e;">
                                    Engagement Makeup : &nbsp
                                </label>
                                <label for="engagement" style="color: grey;">
                                <?php 
                                    echo $data['engagement'];
                                ?>
                                </label>
                                <br>
                                <label for="outstation" style="color: #ff1d8e;">
                                    Outstation Makeup Charges : &nbsp
                                </label>
                                <label for="outstation" style="color: grey;">
                                <?php 
                                    echo $data['outstation'];
                                ?>
                                </label>
                                <br>
                                <label for="about" style="color: grey;">
                                <?php 
                                    echo $data['about'];
                                ?>
                                <br>
                                <br>
                                <a href="edit_makeup_hair.php?id=<?php echo $data['id']; ?>" class="btn-edit-makeup" tabindex="-1" role="button" aria-disabled="true">
                                    Edit
                                </a>
                                <a href="delete_makeup_hair.php?id=<?php echo $data['id']; ?>" class="btn-delete-makeup" tabindex="-1" role="button" aria-disabled="true">
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
                                <label for="bridal_makeup" style="color: #ff1d8e;">
                                    Bridal Makeup : &nbsp
                                </label>
                                <label for="bridal_makeup" style="color: grey;">
                                <?php 
                                    echo $data['bridal_makeup'];
                                ?>
                                </label>
                                <br>
                                <label for="airbrush" style="color: #ff1d8e;">
                                    Airbrush Makeup : &nbsp
                                </label>
                                <label for="airbrush" style="color: grey;">
                                <?php 
                                    echo $data['airbrush'];
                                ?>
                                </label>
                                <br>
                                <label for="party_family" style="color: #ff1d8e;">
                                    Party Makeup For Family : &nbsp
                                </label>
                                <label for="party_family" style="color: grey;">
                                <?php 
                                    echo $data['party_family'];
                                ?>
                                </label>
                                <br>
                                <label for="engagement" style="color: #ff1d8e;">
                                    Engagement Makeup : &nbsp
                                </label>
                                <label for="engagement" style="color: grey;">
                                <?php 
                                    echo $data['engagement'];
                                ?>
                                </label>
                                <br>
                                <label for="outstation" style="color: #ff1d8e;">
                                    Outstation Makeup Charges : &nbsp
                                </label>
                                <label for="outstation" style="color: grey;">
                                <?php 
                                    echo $data['outstation'];
                                ?>
                                </label>
                                <br>
                                <label for="about" style="color: grey;">
                                <?php 
                                    echo $data['about'];
                                ?>
                                <br>
                                <br>
                                <a href="edit_photographer.php?id=<?php echo $data['id']; ?>" class="btn-edit-photographer" tabindex="-1" role="button" aria-disabled="true">
                                    Edit
                                </a>
                                <a href="delete_photographer.php?id=<?php echo $data['id']; ?>" class="btn-delete-photographer" tabindex="-1" role="button" aria-disabled="true">
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