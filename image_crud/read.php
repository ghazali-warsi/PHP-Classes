<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image CRUD</title>
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
    include './config.php';
    $fetch_query = $conn->prepare("SELECT * FROM users");
    $fetch_query->execute();
    $rows =  $fetch_query->fetchAll();
    // print_r($rows);
    
    ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <a href="./insert.php" class="btn btn-success">Add Users</a>
            </div>
            <div class="col-12 mt-2">
                <table class="table table-bordered table-striped table-danger">
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Contact</th>
                        <th>User Age</th>
                        <th>User Image</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    if($rows)
                    {
                
                        foreach($rows as $data)
                        {
                    ?>
                    <tr>
                        <td><?php echo $data['ID']?></td>
                        <td><?php echo $data['Name']?></td>
                        <td><?php echo $data['Email']?></td>
                        <td><?php echo $data['Contact']?></td>
                        <td><?php echo $data['Age']?></td>
                        <td><?php echo '<img src="./uploads/'.$data['Image'].'" class="img" >'?></td>
                        <td><a href="./update.php?id=<?php echo $data['ID']?>" class="btn btn-success">Update</a></td>
                        <td><a href="./delete.php?id=<?php echo $data['ID']?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                       }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
    </html>