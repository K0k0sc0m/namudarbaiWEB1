<?php

if(isset($_GET['go'])){
    header("location:./blue.php");

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
        .bg-color{
            background-color: red;
        }

        a{
            font-size: 50px;
            color: blue;
        }


    </style>
</head>
<body class="bg-color">
    <a href="?go=1">to myself</a>
</body>
</html>