<?php 
    include("CONNECTION/connection.php");

    if (!$_SESSION['LOGGED']) {
        header("Location: index.php?error=2");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>
<body>
        <center>
        <?php 
            echo "<h1 style=' color: white;'>Bem-vindo</h1> <h1 style=' color: #b22222;'>". $_SESSION['name'] ."</h1>";
        ?>
        </center>
        <center>
            <a href="logout.php" id="link">Logout</a>
        </center>
</body>
</html>