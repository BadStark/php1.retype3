<?php

if (isset($_POST['textbook'])){
    file_put_contents(__DIR__ . '/questbook.txt', '<br>' . $_POST['textbook'], FILE_APPEND);

    $massive2 = include (__DIR__ . '/readFileFunc.php');

    foreach ($massive2 as $value) {
        echo $value . '<br>';
    }
}


require __DIR__ . '/picScript.php';
