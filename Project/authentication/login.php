<?php 
session_start();
?>

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
        <label for="em">Email</label>
        <input type="email" id="em" placeholder="Enter Email" name="email" class="form-control" required>
    </div>

    <div class="mt-3">
        <label for="ps">Password</label>
        <input type="password" id="ps" placeholder="Enter Password" name="pass" class="form-control" required>
    </div>

    <div class="mt-3">
        <button type="submit" name="log">Log In</button>
    </div>
</form>
</div>
</div>
</div>
</div>
<?php 
include (__DIR__ . "/../dbconn.php");
if(isset($_REQUEST['log']))
{
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];

    $emailQuery = $conn->prepare("SELECT * FROM registration WHERE email = '$email'");
    $emailQuery->execute();
    $data = $emailQuery->fetch();
    if($data)
    {
        $dbpass = $data['password'];
        
      echo  $_SESSION['username'] = $data['name'];

        $verify = password_verify($password, $dbpass);
        if($verify)
        {
            header("Location:./home1.php");
        }
        else
        {
            echo "invalid password";
        }
    }
    else{
         echo "invalid Email";
    }
}

?>

</body>
</html>