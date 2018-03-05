<?php include 'functions.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img {
            width: 240px;
        }
    </style>
</head>
<body>
<h1>Гостевая книга</h1>
<?php
$res = fopen(__DIR__ . '/data.txt', 'r');
$dataArray = readData($res);
fclose($res);
foreach ($dataArray as $recordLine) {
    echo $recordLine."<br>";
}
?>
<hr>
<form action="script.php" method="post">
    <p>Добавьте новую запись в гостевую книгу: <input type="text" name="$recordLine"></p>
    <button type = "submit">Записать</button>
</form>
<hr>
<h2>Фотогалерея</h2>
<?php
$filesArray = scandir(__DIR__ . '/images');
$skip = ['.', '..'];
foreach ($filesArray as $img) {
    if(!in_array($img, $skip)) {
         ?><img src="images/<?php echo $img;?>">
    <?php }
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <button type="submit">Отправить</button>
</form>
</body>
</html>
