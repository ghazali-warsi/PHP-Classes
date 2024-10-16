<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
<form action="" method="post">
    <div class="mt-3">
        <label for="n">Name</label>
        <input type="text" id="n" placeholder="Enter Name" name="name" class="form-control" required>
    </div>

    <div class="mt-3">
        <label for="em">Email</label>
        <input type="email" id="em" placeholder="Enter Email" name="email" class="form-control" required>
    </div>

    <div class="mt-3">
        <label for="ps">Password</label>
        <input type="password" id="ps" placeholder="Enter Password" name="pass" class="form-control" required>
    </div>

    <div class="mt-3">
        <label for="cp">Confirm Password</label>
        <input type="password" id="cp" placeholder="Confirm Password" name="cpass" class="form-control" required>
    </div>

    <div class="mt-3">
        <button type="submit" name="sign" class="btn btn-outline-success">Sign Up</button>
    </div>
</form>
</div>
</div>
</div>
<?php
include  (__DIR__ . "/../dbconn.php");
if(isset($_REQUEST['sign']))
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $Cpass = $_REQUEST['cpass'];


     $incryptPass = password_hash($pass , PASSWORD_BCRYPT);

    $emailCheck = $conn->prepare("SELECT * FROM registration WHERE email = '$email' ");
    $emailCheck->execute();
    $data = $emailCheck->fetch();
    if($data)
    {
        echo "Email Already Exist";
    }
    else
    {
        if($pass == $Cpass)
        {
            $insertQuery = $conn->prepare("INSERT INTO registration (name, email , password)
            VALUES ('$name','$email','$incryptPass')");
            $insertQuery->execute();
            if($insertQuery)
            {
                header("location: ./login.php");
            }
            else
            {
                echo "Data Not Insert";
            }
        }
        else{
            echo "password Not matched";
        }
    }
}

?>
</body>
</html>