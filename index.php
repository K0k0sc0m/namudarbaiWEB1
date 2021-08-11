<?php

$color = "black";

if(isset($_GET["color"])){
    $color ="red";
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
            background-color: <?= $color ?>;
        }
        a {
            color: blue;
            font-size: 50px;
        }

    </style>
</head>
<body class="bg-color">
    <a href="./index.php">A</a>
    <a href="./index.php?color=1">B</a>
    
</body>
</html>


