<?php 

include (__DIR__ ."/../config.php");

if(isset($_REQUEST['addCart']))
{
     $cartimage = $_REQUEST['primage'] ;
     $cartname = $_REQUEST['prname'] ;
     $cartdesc = $_REQUEST['prdesc'] ; 
     $cartprice = $_REQUEST['prprice'] ;
     $quantity = 1;


     $select = $conn->prepare("SELECT * FROM addcart WHERE name = '$cartname'");
     $select->execute();
     $row = $select->fetchAll();
     if(count($row) >0 )
{
    echo "product Already Add in the Cart";
}else
{   
    $insertCart = $conn->prepare("INSERT INTO addcart (name , description , price , image, Qauntity)
     VALUES('$cartname' , '$cartdesc' , '$cartprice' , '$cartimage' , '$quantity')");
     $insertCart->execute();
     if($insertCart)
     {
         echo "product add to the cart section";
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    .card-img img 
    {
        width: 80%;
        height: 300px;
    }
</style>

</head>

<body>

<?php include (__DIR__ . "/../header.php")?>


<div class="container mt-5">
    <div class="row">
<?php 

$select = $conn->prepare("SELECT * From products");
$select->execute();
$rows =  $select->fetchAll();

if(count($rows)>0)
{
    foreach($rows as $data)
    {
?>

<div class="col-4">
            <form action="" method="post">
            <div class="card text-center">
                <div class="card-img">
                    <img src="./uploads/<?php echo $data['image'] ?>" alt="">
                </div>
                <div class="card-head">
                    <h1><?php echo $data['name']  ?></h1>
                    <p><?php echo $data['description']  ?></p>
                    <span>Price : <?php echo $data['price']  ?></span>
                </div>
                <input type="hidden" name="primage" value="<?php echo $data['image']?>" >
                <input type="hidden" name="prname" value="<?php echo $data['name']?>" >
                <input type="hidden" name="prdesc" value="<?php echo $data['description']?>" >
                <input type="hidden" name="prprice" value="<?php echo $data['price']?>" >
                <button type="submit" class="btn btn-primary" name="addCart">Add To Cart</button>
            </div>
            </form>
        </div>

<?php
    }
}
?>

       
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>