<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Logout Process
        </title>
        <link rel="shortcut icon" type="icon" href="img/wedmegood.png">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
    <?php
    include "config.php";
    session_start();
    session_destroy();
    echo '<meta http-equiv="refresh" content="0,url=home.php">';
    echo '';
    ?>
        <script src="js/bootstrap.js"></script>
    </body>
</html>