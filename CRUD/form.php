<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    
                <div class="mt-3">
                        <label for="n">Name</label>
                        <input type="text" placeholder="Enter Name" name="username" id="n" class="form-control">

                    </div>

                    <div class="mt-3">
                        <label for="e">Email</label>
                        <input type="email" placeholder="Enter Email" name="useremail" id="e" class="form-control">

                    </div>

                    <div class="mt-3">
                        <label for="a">Address</label>
                        <input type="text" placeholder="Enter Address" name="address" id="a" class="form-control">

                    </div>

                    <div class="mt-3">
                        <label for="ag">Age</label>
                        <input type="number" placeholder="Enter Age" name="age" id="ag" class="form-control">

                    </div>
                <div class="mt-3">
                    <button type="submit" name="add" value="submit" class="btn btn-primary">Add Employee</button>
                </div>

                </form>
            </div>
        </div>
    </div>

<?php
include 'config.php';

if(isset($_REQUEST['add']))
{
    $name = $_REQUEST['username'];
    $email = $_REQUEST['useremail'];
    $address = $_REQUEST['address'];
    $age = $_REQUEST['age'];

    $email_query = "SELECT * FROM employees WHERE Email = '$email'";

    $email_trig = mysqli_query($conn , $email_query);
    $email_count = mysqli_num_rows($email_trig);

    if($email_count > 0)
    {?>
       <script>
         alert("Email Already Exist");
       </script>
       <?php 
    }
    else
    {
        $insert_query = "INSERT INTO employees (Name , Email , Address , Age) 
        VALUES ('$name' , '$email' , '$address', '$age') ";

        $insert_trig = mysqli_query($conn , $insert_query);
        if($insert_trig)
        {?>
        <script>
            alert("Data Has Been Added");
            window.location.href = './employee_data.php';
        </script>
        <?php
        } 
        else
        {
        ?>
        <script>
            alert("Data Has not Added");
        </script>
        <?php
            
        }
    }
}

?>

</body>

</html>