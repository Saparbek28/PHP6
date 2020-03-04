<?php
require_once 'connection.php';
$link = mysqli_connect($host,$user,$password,$database) or die('error'. mysqli_error($link));

$query = "DROP TABLE phones";
$result = mysqli_query($link, $query) or die("error". mysqli_error($link));
if($result){
    echo " delete table ";
}

mysqli_close($link);