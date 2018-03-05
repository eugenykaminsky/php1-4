<?php
function readData($data)
{
while(!feof($data)){
    $line[] = fgets($data,1024);
}
    return $line;
}