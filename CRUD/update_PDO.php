<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php 
    include './config_PDO.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = $conn->prepare("SELECT * From employees Where ID = '$id'");
        $sql->execute();
        $fetch = $sql->fetchAll();
        // print_r($fetch);

        foreach($fetch as $data)
        {
            $ID = $data['ID'];
            $name = $data['Name'];
            $email = $data['Email'];
            $address = $data['Address'];
            $age = $data['Age'];
        }
    }
    
    ?>

<div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Update Employee</h1>
                <form action="" method="post">
                <div class="mt-3">
                        <label for="i">ID</label>
                        <input type="number" readonly name="userid" id="i" value="<?php echo $ID?>" class="form-control">

                    </div>    

                <div class="mt-3">
                        <label for="n">Name</label>
                        <input type="text" placeholder="Enter Name" name="username" id="n" value="<?php echo $name?>" class="form-control">

                    </div>

                    <div class="mt-3">
                        <label for="e">Email</label>
                        <input type="email" placeholder="Enter Email" name="useremail" value="<?php echo $email?>" id="e" class="form-control">

                    </div>

                    <div class="mt-3">
                        <label for="a">Address</label>
                        <input type="text" placeholder="Enter Address" name="address" value="<?php echo $address?>" id="a" class="form-control">

                    </div>

                    <div class="mt-3">
                        <label for="ag">Age</label>
                        <input type="number" placeholder="Enter Age" name="age" value="<?php echo $age?>" id="ag" class="form-control">

                    </div>
                <div class="mt-3">
                    <button type="submit" name="update" value="<?php echo $ID?>" value="submit" class="btn btn-primary">Update</button>
                </div>

                </form>
            </div>
        </div>
    </div>

<?php 

if(isset($_REQUEST['update']))
{   $id =$_REQUEST['update'];
    $username = $_REQUEST['username'];
    $useremail = $_REQUEST['useremail'];
    $useraddress = $_REQUEST['address'];
    $userage = $_REQUEST['age'];

$update_query = $conn->prepare("UPDATE employees SET 
Name = ' $username' , Email = '$useremail' , Address = ' $useraddress' , Age = ' $userage' WHERE ID = '$id' ");
$update_query->execute();
if($update_query)
{
    ?>
    <script>
        alert('Data Has Been Updated');
        window.location.href = './read_PDO.php';
    </script>
    <?php 
}
else
{
    
    ?>
    <script>
        alert('Data Has Not Been Updated');
        // window.location.href = './read_PDO.php';
    </script>
    <?php 
}
}

?>

</body>
</html>