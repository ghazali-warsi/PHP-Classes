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
                    <input type="text" id="n" placeholder="Enter Name" class="form-control" name="name">
                </div>    

                <div class="mt-3">
                    <label for="em">Description</label>
                  <textarea name="desc" id="em" class="form-control"></textarea>
                </div>    

                <div class="mt-3">
                    <label for="pr">Price</label>
                    <input type="number" id="c" placeholder="Enter Price"  class="form-control" name="price">
                </div>  

                <div class="mt-3">
                    <label for="im">Image</label>
                    <input type="file" id="im" placeholder="Enter Image"  class="form-control" name="image">
                </div>     

                <div class="mt-3">
                    <button type="submit" name="add" class="btn btn-success">Add Product</button>
                </div>
            
                </form>
            </div>
        </div>
    </div>
    <?php 
    include (__DIR__  . '/../config.php');
    if(isset($_REQUEST['add']))
    {
        
        // echo "<pre>";
        // print_r($_FILES['image']);
        // echo "</pre>";

        //  $filename =  $_FILES['image']['name'];
        //  $filetmp = $_FILES['image']['tmp_name'];
        //   $file_path = './uploads/'.$filename;
        // move_uploaded_file($filetmp , $file_path);
      $name = $_REQUEST['name'];
      $desc = $_REQUEST['desc'];
      $price = $_REQUEST['price'];
      $image = $_FILES['image'];
    
     
    if($image)
    {
      $imagename = $_FILES['image']['name'];
      $insert_query=$conn->prepare("INSERT INTO products (Name ,Description, Price ,product_image)
   VALUES ('$name' ,'$desc','$price','$imagename')");
   $insert_query->execute();
   if($insert_query)
   {
      $filename = $_FILES['image']['name'];
      $tmpname =  $_FILES['image']['tmp_name'];
      $file_path = './uploads/'.$filename;
      move_uploaded_file($tmpname , $file_path);
      echo "Data added Successfully";
      header("Location:./cards.php");
   }
   else{
      echo "Image Not uploaded";
   }
    }else
    {
      echo "image not found";
    }
}
    ?>
</body>
</html>