<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .img{
        width: 200px;
        height: 100px;
        object-fit: contain;
    }
</style>
</head>
<body>
<?php
include "config.php";
if(isset($_GET['id']))
{
    $getID = $_GET['id'];
    $sqlFetch = $conn->prepare("SELECT * FROM users WHERE ID = '$getID' ");
    $sqlFetch->execute();
   $row = $sqlFetch->fetchAll();
   foreach($row as $data)
   {
   $userID= $data['ID'];
   $username= $data['Name'];
   $useremail= $data['Email'];
   $usercontact= $data['Contact'];
   $userage= $data['Age'];
   $userimage= $data['Image'];
   }
}

?>


    <div class="container">
        <div class="row">
            <div class="col-9">
                <form action="<?php echo  $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                <div class="mt-3">
                    <label for="id">ID</label>
                    <input type="number" id="id" value="<?php echo  $userID ?>" readonly class="form-control" name="userid">
                </div>    

                <div class="mt-3">
                    <label for="n">Name</label>
                    <input type="text" id="n" placeholder="Enter Name" value="<?php echo  $username ?>" class="form-control" name="username">
                </div>    

                <div class="mt-3">
                    <label for="em">Email</label>
                    <input type="email" id="em" name="email" placeholder="Enter Email " value="<?php echo  $useremail ?>"  class="form-control" >
                </div>    

                <div class="mt-3">
                    <label for="c">Contact</label>
                    <input type="number" id="c" placeholder="Enter Number" value="<?php echo  $usercontact ?>"  class="form-control" name="usercontact">
                </div>  

                <div class="mt-3">
                    <label for="im">Image</label>
                    <div class="d-flex">
                    <input type="file" id="im" placeholder="Enter Image"  class="form-control" name="userimage">
                    <img src="./uploads/<?php echo $userimage ?>" class="img" alt="">
                </div> </div>

                <div class="mt-3">
                    <label for="ag">Age</label>
                    
                        <input type="number" id="ag" placeholder="Enter Age" value="<?php echo  $userage ?>"  class="form-control" name="userage">
                    
                </div>    

                <div class="mt-3">
                    <button type="submit" name="update" value="<?php echo  $userID ?>" class="btn btn-success">Update User</button>
                </div>
            
                </form>
            </div>
        </div>
    </div>

    <?php 
    
    if(isset($_REQUEST['update']))
    {
        $updid = $_REQUEST['update'];
        $updname = $_REQUEST['username'];
        $updemail = $_REQUEST['email'];
        $updcontact = $_REQUEST['usercontact'];
        $updimage = $_FILES['userimage'];
        $updimageName = $_FILES['userimage']['name'];
        $updage = $_REQUEST['userage'];

        $imageQuery = $conn->prepare("SELECT Image FROM users WHERE ID = $updid");
        $imageQuery->execute();
        $oldimage = $imageQuery->fetch();
        $preimage = $oldimage['Image'];
        
       if($updimage!= "")
       {  
        $updateQuery = $conn->prepare("UPDATE users SET Name = '$updname' , Email = '$updemail' 
        ,Contact = '$updcontact' , Image = '$updimageName' , Age = '$updage' WHERE ID = '$updid'");
        $updateQuery->execute();
        
        $filepath = "./uploads/" . $updimageName;
        $tmp = $_FILES['userimage']['tmp_name'];
        
        if(move_uploaded_file($tmp , $filepath))
        {
            $oldimagePath = "./uploads/" . $oldimage['Image'];
            // echo $oldimagePath;
            unlink($oldimagePath);
            echo "Old Image Deleted From the Server";
           header("Location: ./read.php");
        }else 
        {
            $updateQuery = $conn->prepare("UPDATE users SET Name = '$updname' , Email = '$updemail' 
            , Contact = '$updcontact' ,Image = '$preimage' , Age = '$updage' WHERE ID = '$updid'");
            $updateQuery->execute();   
            header("Location: ./read.php");
        
            // echo "Data Update Without a image";
    
        }
    }
    
        }
        
   
    
    ?>

</body>
</html>