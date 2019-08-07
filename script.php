<?php
require (__DIR__ . '/readFileFunc.php');


if (isset($_POST['textbook'])){
    $intxt = file_put_contents(__DIR__ . '/questbook.txt', $_POST['textbook'], FILE_APPEND);

    $massive = readbook();
    foreach ($massive as $value){
        echo $value . '<br>';
    }
}