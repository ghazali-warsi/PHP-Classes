<?php

$hostname = 'localhost'; 
$username = 'root';
$password = '';
$database = 'crud';

$conn = mysqli_connect($hostname , $username , $password , $database);
if($conn) {
    // echo "Connection Built Successfully";
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
}else
{
    echo "Connection Failed";
}


?>