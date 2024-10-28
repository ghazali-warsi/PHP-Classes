<?php 

include (__DIR__ ."/../config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    td img 
    {
        width: 60%;
        height: 100px;
    }
</style>

</head>

<body>
<div class="container mt-5">
    <div class="row">
<?php 

if(isset($_REQUEST['addcount']))
{
     $id = $_REQUEST['addcount'];

    $updateCount = $_REQUEST['updquant'];

    $update = $conn->prepare("UPDATE addcart SET Qauntity = '$updateCount' WHERE id = '$id'");
    $update->execute();
    if($update)
    {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Cart Quantity</strong> Updated By " . $updateCount   . "
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }

}

if(isset($_REQUEST['deleteAll']))
{
    $deleteAll = $conn->prepare("TRUNCATE addcart");
    $deleteAll->execute();
    if($deleteAll)
    {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>No Data</strong> In the Cart
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
}

if(isset($_REQUEST['remove']))
{
    $remove = $_REQUEST['remove'];
    $delete = $conn->prepare("DELETE FROM addcart WHERE id = '$remove'");
    $delete->execute();

}




$select = $conn->prepare("SELECT * From addcart");
$select->execute();
$rows =  $select->fetchAll();

if(count($rows)>0)
{
?>

<div class="col-12">
    <table class="table table-success table-striped">
        <tr>
            <th>SR No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>

<?php 
    $grandTotal = 0;
    foreach($rows as $data)
    {
?>

        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['price'] ?></td>
            <td><?php echo $data['description'] ?></td>
            <form action="" method="post">
                <td>
                    <input type="number" min='1' name="updquant" value="<?php echo $data['Qauntity'] ?>">
                    <button type="submit" class="btn btn-primary btn-sm" name="addcount" value="<?php echo $data['id'] ?>" >Update</button> 
                </td>
            </form>
            <td><img src="../products/uploads/<?php echo $data['image']?>" alt=""></td>
            <td><?php  echo $data['Qauntity'] * $data['price']?></td>
            <form action="" method="post">
                <td><button class="btn btn-primary" name="remove" value="<?php echo $data['id'] ?>">Remove</button></td>
            </form>
        </tr>

 

<?php

$grandTotal +=  $data['Qauntity'] * $data['price'];

// $grandTotal = $grandTotal + $data['Qauntity'] * $data['price'];

}
    ?>
    </table>
    </div>

    <div class="col-12">
    <div class="row">
        <div class="col-4">
            <h4 class="bg-success">Grand Total : <?php echo number_format($grandTotal , 2) ?> / </h4>
        </div>
        <div class="col-4">
            <form action="" method="post">
                <button class="btn btn-danger" name="deleteAll">Delete ALL</button>
            </form>
        </div>
    </div>
</div>


<?php



}
?>



</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<td><?php // echo "<img src='../products/uploads/$data[image]' >"  ?>  </td>