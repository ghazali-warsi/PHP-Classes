<?php 

$server = "localhost";
$username = "root";
$password= '';
$database = "cart";


$conn = new PDO("mysql:host=$server; dbname=$database" , $username , $password);
$conn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_WARNING);
if(!$conn)
{
    echo "No Connection Establish";
}

?>