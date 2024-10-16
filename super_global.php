<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $_GET , $_POST , $_REQUEST , $_SERVER ,  -->

<form action="" method="get">
<div>
    <label for="">Name</label>
    <input type="text" placeholder="Enter Name" name="username">
</div>


<div>
    <label for="">Email</label>
    <input type="text" placeholder="Enter Email" name="useremail">
</div>

<div>
    <label for="">Address</label>
    <input type="text" placeholder="Enter Address" name="useraddress">
</div>

<button type="submit">Submit </button>
</form>

<?php

print_r($_GET);
// print_r($_POST);

?>


</body>
</html>