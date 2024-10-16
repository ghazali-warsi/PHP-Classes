<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php
    include (__DIR__ . "/../config.php");
    
    $sqlQuery = $conn->prepare("SELECT * FROM products");
    $sqlQuery->execute();
    $rows = $sqlQuery->fetchAll();    
    ?>
    
<div class="container">
<div class="row justify-content-evenly">
    <?php
    if($rows)
    {
        foreach($rows as $data)
        {
    ?>
    <div class="col-3 mt-3 text-center border">
        <div class="card-image">
            <img src="./uploads/<?php echo $data['product_image'] ?>" style="width:80%; height:200px; object-fit:fill;" alt="">
        </div>
     <div class="card-title">
        <h1><?php echo  $data['Name']?></h1>
     </div>
     <div class="card-text">
        <p class="">
        <?php echo  $data['Description']?>
        </p>
     </div>
     <div class="card-price">
        <span><?php echo  $data['Price']?></span>
     </div>
    <button class="btn btn-primary">READ More</button>
    </div>
    <?php    
}
}
    ?>
</div>
</div>

</body>
</html>