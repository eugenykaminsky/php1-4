<?php
// var_dump($_FILES);
$path = __DIR__ . 'images';
if (isset($_FILES['myimg'])){
    if (0 == $_FILES['myimg']['error']){
        $res = move_uploaded_file(
            $_FILES['myimg']['tmp_name'],
            __DIR__ . '/images/test.jpg'
        );
    }
}