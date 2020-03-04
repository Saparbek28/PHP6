<?php
require_once 'connection.php';

$link = mysqli_connect($host,$user,$password,$database) or die('error'. mysqli_error($link));

$query = "CREATE Table phones(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    name VARCHAR(255) NOT NULL,
    company VARCHAR (255) NOT NULL

)";

$result = mysqli_query($link, $query) or die("error". mysqli_error($link));

if($result){

    echo 'vse ok';
}

mysqli_close($link);