<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location:client_login.php");
    }

    include "config.php";
    if(isset($_POST['submit']))
    {
        $bg = $_POST['bg'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $v_name = $_POST['v_name'];
        $from_this_date = $_POST['from_this_date'];
        $to_this_date = $_POST['to_this_date'];
        $from_this_time = $_POST['from_this_time'];
        $to_this_time = $_POST['to_this_time'];
        $space = $_POST['space'];
        $space1 = implode(", ",$space);
        $function = $_POST['function'];
        $function1 = implode(", ",$function);

        $insert = "INSERT INTO `b_lawns_farmhouses`(`bg`,`name`,`email`,`contact`,`v_name`,`from_this_date`,`to_this_date`,`from_this_time`,`to_this_time`,`space`,`function`) VALUES('$bg','$name','$email','$contact','$v_name','$from_this_date','$to_this_date','$from_this_time','$to_this_time','$space1','$function1')";
        $result = mysqli_query($con, $insert);

        if($result)
        {
            header("location:bookings.php");
        }

        else
        {
            header("location:lawns_farmhouses_booking.php");
        }
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
            Booking Lawns / Farmhouses
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
            width: 1000px;
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

            .form-container form input:hover, .form-container form input:focus{
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

            .form-container .form-select{
                width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background-color: #d0c9ea;
            border-width: 0;
            border-radius: 5px;
            }

            .form-container option{
            font-size: 16px;
            color: #031273;
            background-color: white;
            }

            hr{
                width: 950px;
                margin-left: 5px;
                margin-top: 25px;
            }

            .form-container form .indoor-1{
                margin-left: -940px;
                margin-top: 25px;
            }

            .form-container form .indoor-1:hover, .form-container form .indoor-1:focus{
                margin-left: -940px;
                margin-top: 25px;
            }

            .form-container form .outdoor-1{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .outdoor-1:hover, .form-container form .outdoor-1:focus{
                margin-left: -940px; 
                margin-top: 15px;
            }

            .form-container form .in-out-1{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .in-out-1:hover, .form-container form .in-out-1:focus{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .indoor-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .outdoor-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .in-out-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .wedding-1{
                margin-left: -940px;
                margin-top: 25px;
            }

            .form-container form .wedding-1:hover, .form-container form .wedding-1:focus{
                margin-left: -940px;
                margin-top: 25px;
            }

            .form-container form .wedding-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .reception-1{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .reception-1:hover, .form-container form .reception-1:focus{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .reception-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .engagement-1{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .engagement-1:hover, .form-container form .engagement-1:focus{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .engagement-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .sangeet-1{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .sangeet-1:hover, .form-container form .sangeet-1:focus{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .sangeet-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .mehndi-1{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .mehndi-1:hover, .form-container form .mehndi-1:focus{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .mehndi-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .haldi-1{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .haldi-1:hover, .form-container form .haldi-1:focus{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .haldi-2{
                margin-left: 30px;
                margin-top: -27px;
                font-size: 16px;
            }

            .form-container form .form-btn{
                color: white;
                background-color: #ff1d8e;
                border: 1px solid #ff1d8e;
                width: 150px;
                margin-top: 30px;
            }

            .form-container form .form-btn:hover, .form-container form .form-btn:focus{
                color: #ff1d8e;;
                background-color: white;
                border: 1px solid #ff1d8e;
                width: 150px;
                margin-top: 30px;
            }

            .form-container form .back-client{
                color: white;
                background-color: #031273;
                text-decoration: none;
                padding-top: 11px;
                padding-bottom: 11px;
                padding-right: 35px;
                padding-left: 35px;
                border: 1px solid #031273;
                border-radius: 5px;
                margin-right: 650px;
            }

            .form-container form .back-client:hover, .form-container form .back-client:focus{
                color: #031273;
                background-color: white;
                border: 1px solid #031273;
            }

            .navbar-brand{
                color: white;
                font-size: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-left: 625px;
            }

            .form-container form .bg{
                margin-top: 20px;
            }

            .form-container form .form-b{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .form-b:hover, .form-container form .form-b:focus{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .bride{
                margin-left: 30px;
                margin-top: -27px;
            }

            .form-container form .form-g{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .form-g:hover, .form-container form .form-g:focus{
                margin-left: -940px;
                margin-top: 15px;
            }

            .form-container form .groom{
                margin-left: 30px;
                margin-top: -27px;
            }

        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    Booking Your Venue
                </a>
            </div>
        </nav>

        <div class="form-container">
            <form action="" method="post">
                <h3>
                    For Lawns / Farmhouses
                </h3>
                <label for="bg" class="bg">
                    Are You Bride or Groom?
                </label>
                <div>
                    <input class="form-b" type="radio" name="bg" id="radioNoLabel1" value="Bride" aria-label="...">
                    <label for="bride" class="bride">
                        Bride
                    </label>
                    <input class="form-g" type="radio" name="bg" id="radioNoLabel1" value="Groom" aria-label="...">
                    <label for="groom" class="groom">
                        Groom
                    </label>
                </div>
                <div class="hr">
                    <hr>
                </div>
                <label for="name">
                    Your Name 
                </label>
                <input type="text" id="name" name="name" value="<?php echo $data['name']; ?>" readonly required>
                <label for="email">
                    Email
                </label>
                <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>" readonly required>
                <label for="contact">
                    Contact
                </label>
                <input type="tel" id="contact" name="contact" value="<?php echo $data['contact']; ?>" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57" readonly required>
                <label for="v_name">
                    Venue Name
                </label>
                <select class="form-select" aria-label="Default select example" name="v_name">
                    <?php
                        $query = "SELECT * FROM `lawns_farmhouses`";
                        $result = mysqli_query($con, $query);
                        while($data = mysqli_fetch_assoc($result))
                        {
                    ?>

                    <option value="<?php echo $data['name']; ?>">
                        <?php
                            echo $data['name'];
                        ?>
                    </option>
                    <?php
                        }
                    ?>
                </select>
                <div class="hr">
                    <hr>
                </div>
                <label for="from_this_date">
                    From This Date
                </label>
                <input type="date" id="from_this_date" name="from_this_date" required>
                <label for="to_this_date">
                    To This Date
                </label>
                <input type="date" id="to_this_date" name="to_this_date" required>
                <div class="hr">
                    <hr>
                </div>
                <label for="from_this_time">
                    From This Time
                </label>
                <input type="time" id="from_this_time" name="from_this_time" required>
                <label for="to_this_time">
                    To This Time
                </label>
                <input type="time" id="to_this_time" name="to_this_time" required>
                <div class="hr">
                    <hr>
                </div>
                <label for="space">
                    Space 
                </label>
                <div>
                    <input class="indoor-1" type="checkbox" id="checkboxNoLabel" name="space[]" value="Indoor" aria-label="...">
                    <label for="indoor" class="indoor-2">
                        Indoor
                    </label>
                    <input class="outdoor-1" type="checkbox" id="checkboxNoLabel" name="space[]" value="Outdoor" aria-label="...">
                    <label for="outdoor" class="outdoor-2">
                        Outdoor
                    </label>
                    <input class="in-out-1" type="checkbox" id="checkboxNoLabel" name="space[]" value="Indoor & Outdoor" aria-label="...">
                    <label for="indoor & outdoor" class="in-out-2">
                        Indoor & Outdoor
                    </label>
                </div>
                <div class="hr">
                    <hr>
                </div>
                <label for="function" class="function">
                    Functions
                </label>
                <div>
                    <input class="wedding-1" type="checkbox" id="checkboxNoLabel" value="Wedding" name="function[]" aria-label="...">
                    <label for="Wedding" class="wedding-2">
                        Wedding
                    </label>
                    <input class="reception-1" type="checkbox" id="checkboxNoLabel" value="Reception" name="function[]" aria-label="...">
                    <label for="reception" class="reception-2">
                        Reception
                    </label>
                    <input class="engagement-1" type="checkbox" id="checkboxNoLabel" value="Engagement" name="function[]" aria-label="...">
                    <label for="engagement" class="engagement-2">
                        Engagement
                    </label>
                    <input class="sangeet-1" type="checkbox" id="checkboxNoLabel" value="Sangeet" name="function[]" aria-label="...">
                    <label for="sangeet" class="sangeet-2">
                        Sangeet
                    </label>
                    <input class="mehndi-1" type="checkbox" id="checkboxNoLabel" value="Mehndi" name="function[]" aria-label="...">
                    <label for="mehndi" class="mehndi-2">
                        Mehndi
                    </label>
                    <input class="haldi-1" type="checkbox" id="checkboxNoLabel" value="Haldi" name="function[]" aria-label="...">
                    <label for="haldi" class="haldi-2">
                        Haldi
                    </label>
                </div>
                <input type="submit" name="submit" id="submit" value="Book" class="form-btn">
                <a href="client_home.php" class="back-client">
                    Back Home
                </a>
            </form>
        </div>
    </body>
</html>