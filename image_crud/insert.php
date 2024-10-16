<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <form action="<?php echo  $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
             
                <div class="mt-3">
                    <label for="n">Name</label>
                    <input type="text" id="n" placeholder="Enter Name" class="form-control" name="username">
                </div>    

                <div class="mt-3">
                    <label for="em">Email</label>
                    <input type="email" id="em" placeholder="Enter Email "  class="form-control" name="useremail">
                </div>    

                <div class="mt-3">
                    <label for="c">Contact</label>
                    <input type="number" id="c" placeholder="Enter Number"  class="form-control" name="usercontact">
                </div>  

                <div class="mt-3">
                    <label for="im">Image</label>
                    <input type="file" id="im" placeholder="Enter Image "  class="form-control" name="userimage">
                </div>    

                <div class="mt-3">
                    <label for="ag">Age</label>
                    <input type="number" id="ag" placeholder="Enter Age"  class="form-control" name="userage">
                </div>    

                <div class="mt-3">
                    <button type="submit" name="add" class="btn btn-success">Add User</button>
                </div>
            
                </form>
            </div>
        </div>
    </div>
    <?php 
    include './config.php';
    if(isset($_REQUEST['add']))
    {
        
        // echo "<pre>";
        // print_r($_FILES['image']);
        // echo "</pre>";

        //  $filename =  $_FILES['image']['name'];
        //  $filetmp = $_FILES['image']['tmp_name'];
        //   $file_path = './uploads/'.$filename;
        // move_uploaded_file($filetmp , $file_path);
      $name = $_REQUEST['username'];
      $email = $_REQUEST['useremail'];
      $contact = $_REQUEST['usercontact'];
      $image = $_FILES['userimage'];
      $age = $_REQUEST['userage'];
     
      $email_query = $conn->prepare("SELECT * From users WHERE Email = '$email'");
      $email_query->execute();
      if($email_query->rowCount()>0 )
      {?>
      <script>
        alert('Email already exists in the database');
      </script>
      <?php
      }
else
{
    if($image)
    {
      $imagename = $_FILES['userimage']['name'];
      $insert_query=$conn->prepare("INSERT INTO users (Name ,Email, Contact ,Image ,Age)
   VALUES ('$name' ,'$email','$contact','$imagename','$age')");
   $insert_query->execute();
   if($insert_query)
   {
      $filename = $_FILES['userimage']['name'];
      $tmpname =  $_FILES['userimage']['tmp_name'];
      $file_path = './uploads/'.$filename;
      move_uploaded_file($tmpname , $file_path);
      echo "Data added Successfully";
      header("Location:./read.php");
   }
   else{
      echo "Image Not uploaded";
   }
    }else
    {
      echo "image not found";
    }
}


     
    }
    ?>
</body>
</html>