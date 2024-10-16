<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    include './config_PDO.php';

    $query = $conn->prepare("SELECT * FROM employees");
    // print_r($query);
     $query->execute();
    //  print_r($exe);

    $fetch = $query->fetchAll();
    // print_r($fetch);
    

    ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4 mb-2">

                <a href="./Insert_PDO.php" class="btn btn-primary">Insert Employee</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table table-striped table-success table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Age</th>
            <th>Actions</th>
            <th>Actions</th>
            <th>Actions</th>
        </tr>

        <?php
        foreach($fetch as $data)
        {
        echo "<tr>";
?>
<td><?php echo $data['ID'] ?></td>
<td><?php echo $data['Name'] ?></td>
<td><?php echo $data['Email'] ?></td>
<td><?php echo $data['Address'] ?></td>
<td><?php echo $data['Age']?></td>
<td><a href="./single_PDO.php?id=<?php echo $data['ID']?>" class="btn btn-success btn-sm">Read</a></td>
<td><a href="./update_PDO.php?id=<?php echo $data['ID']?>" class="btn btn-success btn-sm">Edit</a></td>
<td><a href="./delete_PDO.php?id=<?php echo $data['ID']?>" class="btn btn-danger btn-sm">Delete</a></td>
<?php
echo "</tr>";
}
 ?>  

    </table>
            </div>
        </div>
    </div>

</body>
</html>