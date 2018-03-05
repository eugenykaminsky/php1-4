<?php
function readData($path)
{
while(!feof($path)){
    $bookArray[] = fgets($path,1024);
}
    return $bookArray;
}