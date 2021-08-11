<?php

$color = "green";

if(isset($_GET['color'])){
    $color = $_GET['color'];
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-color {
            background-color: #<?= $color ?>;
            background-color: <?= $color ?>;
        }
        a {
            color: blue;
            font-size: 50px;
        }
        button {
            background-color: pink;
        }

    </style>
</head>
<body class="bg-color">
    <a href="./uz2.php">A</a>
    <form action="" method="get">
        <input type="text" name="color">
        <button type="submit">PAINT</button>
    </form>
    
    
</body>
</html>

