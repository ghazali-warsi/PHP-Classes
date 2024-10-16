<?php

$host  = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=crud",$username,$password);
$conn->setAttribute(PDO::ERRMODE_WARNING , PDO::ERRMODE_EXCEPTION);

if($conn)
{
    // echo "connection built";
}
else
{
    echo "no connection";
}

?>