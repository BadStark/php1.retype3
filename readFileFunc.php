<?php

    $put = __DIR__ . '/questbook.txt';
    if (file_exists($put)) {
        $rf = file(__DIR__ . '/questbook.txt');
        return $rf;
    } else {
        return false;
    }

