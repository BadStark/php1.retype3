<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$massive = include (__DIR__ . '/readFileFunc.php');

    foreach ($massive as $value){
       echo $value . '<br>';
    }

?>

<form action="/script.php" method="post">
    <input type="text" name="textbook">
    <button type="submit">Оставить отзыв</button>
</form>


</body>
</html>