<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mt-3">
                    <label for="n">Name</label>
                    <input type="text" placeholder="Enter Name" class="form-control" name="prname" required >
                </div>


                <div class="mt-3">
                    <label for="p">Price</label>
                    <input type="number" placeholder="Enter Price" class="form-control" name="prprice" required >
                </div>

                <div class="mt-3">
                    <label for="des">Description</label>
                    <input type="text" placeholder="Enter Description" class="form-control" name="prdesc" required >
                </div>

                <div class="mt-3">
                    <label for="im">image</label>
                    <input type="file"  class="form-control" name="primage" required >
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary" name="add">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include (__DIR__ . "/../config.php");

if(isset($_REQUEST['add']))
{
    $name = $_REQUEST['prname'];
    $price = $_REQUEST['prprice'];
    $description = $_REQUEST['prdesc'];
    $imageName = $_FILES['primage']['name'];
    $imageTmp = $_FILES['primage']['tmp_name'];
    $imageLoc = "./uploads/" . $imageName;

    $insert = $conn->prepare("INSERT INTO products(name , price, description , image)
    VALUES ('$name' , '$price' , '$description', '$imageName')");
    $insert->execute();
    if($insert)
    {
      move_uploaded_file($imageTmp , $imageLoc);
      echo "Product Added ";
    }
    else
    {
     echo "Product not Added";
    }
    
}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>