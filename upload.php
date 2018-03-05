<?php
$path = __DIR__ . '/images';
$img = $_FILES['myimg']['name'];
$str = $_FILES['myimg']['type'];
$skip = ['image/png', 'image/jpg'];
if (isset($_FILES['myimg'])){
    if (0 == $_FILES['myimg']['error']) {
        $res = move_uploaded_file(
            $_FILES['myimg']['tmp_name'],
            "$path/$img"
        );
    }
}
header('Location: index.php');
exit;
?>