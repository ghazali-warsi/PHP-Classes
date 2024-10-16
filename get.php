<?php

// print_r($_GET);
// print_r($_POST);
// print_r($_REQUEST);
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";


if(isset($_GET['username']))
{
    echo $_GET['username'] . "<br>";
    echo $_GET['useremail'] . "<br>";
    echo $_GET['useraddress'] . "<br>";
}


?>