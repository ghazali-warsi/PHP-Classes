<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php 
include './config.php';

$row_query = "SELECT * FROM employees";

$row_trig = mysqli_query($conn , $row_query);

$row_count = mysqli_num_rows($row_trig);

if($row_count > 0)
{
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-striped table-bordered table-success">
             
            <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Employee Address</th>
                    <th>Employee Age</th>
                </tr>
                <?php while($data = mysqli_fetch_assoc($row_trig))
            {
                ?>
                <tr>
                    <td><?php echo $data['ID'] ?></td>
                    <td><?php echo $data['Name'] ?></td>
                    <td><?php echo $data['Email'] ?></td>
                    <td><?php echo $data['Address'] ?></td>
                    <td><?php echo $data['Age'] ?></td>
                </tr>
           <?php 
         } 
         ?>
            </table>
            </div>
        </div>
    </div>
<?php 
}

?>
</body>
</html>