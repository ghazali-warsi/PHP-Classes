<?php 

$server = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$server;dbname=crud" , $username , $password);
$conn->setAttribute(PDO::ERRMODE_WARNING , PDO::ERRMODE_EXCEPTION);
if(!$conn)
{
    echo "Connection not built";
}


?>