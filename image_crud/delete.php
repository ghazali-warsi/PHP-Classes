<?php 
include './config.php';
if(isset($_GET['id']))
{
    $delID = $_GET['id'];

$imageQuery = $conn->prepare("SELECT Image FROM users WHERE ID = '$delID'");
$imageQuery->execute();
$data = $imageQuery->fetch();
$image =  $data['Image'];

$filepath = "./uploads/".$image;
if(file_exists($filepath))
{
   unlink($filepath);
}

    $delQuery = $conn->prepare("DELETE FROM users WHERE ID = '$delID'");
    $delQuery->execute();
    header("Location:./read.php");
}


?>