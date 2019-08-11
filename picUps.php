<?php
if (!empty($_FILES) || isset($_FILES['myimage']) || 0 == $_FILES['myimage']['error']){
    $name = $_FILES['myimage']['name'];
    move_uploaded_file($_FILES['myimage']['tmp_name'], __DIR__ . '/pics/' . $name );
    var_dump($name);
    var_dump($_FILES['myimage']);
}