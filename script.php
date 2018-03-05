<?php
include 'functions.php';
$res = fopen(__DIR__ . '/data.txt', 'r');
$dataArray = readData($res);
fclose($res);
if (isset($_POST['$recordLine'])) {
    $dataArray[] = $_POST['$recordLine'];
}
$res = fopen(__DIR__ . '/data.txt', 'r+');
foreach ($dataArray as $recordLine) {
    fwrite($res, $recordLine);
}
fwrite($res, "\n");
header('Location: index.php');
exit;
?>