<?php
include 'functions.php';
$path = __DIR__ . '/data.txt';
$res = fopen($path, 'r');
$dataArray = readData($res);
fclose($res);
if (isset($_POST['$recordLine'])) {
    $dataArray[] = $_POST['$recordLine'];
}
$res = fopen($path, 'r+');
foreach ($dataArray as $recordLine) {
    fwrite($res, $recordLine);
}
fwrite($res, "\n");
header('Location: index.php');
exit;
?>