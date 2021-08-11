<?php

$color = "green";

if ( $_SERVER["REQUEST_METHOD"] == "POST"){
    $color = "yellow";
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
        button{
            background-color:black;
            color:white;
            font-size:50px;
            border-radius: 15px;
            cursor: pointer;
            
        }

        .bg-color {
            background-color: <?= $color ?>;
        }

    </style>
</head>
<body class="bg-color">
    <form action="" method="get">
        <button type="submit">get</button>
    </form>
    <form action="" method="post">
    <button type="submit">post</button>
    </form>
</body>
</html>