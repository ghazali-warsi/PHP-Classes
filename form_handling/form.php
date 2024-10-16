

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<table class="table table-strpied table-success">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Gender</th>
    <th>Courses</th>
</tr>

<?php

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";


echo "<tr>";
if(isset($_REQUEST["username"]))
{
    foreach($_REQUEST as $value )
{
    
    // if($_REQUEST["check"] == $value)
    // {
    // continue;   
    // }



   echo  "<td>$value</td>";

   foreach($value as $item)
   {
    echo "<td>$item</td>";
   }

}
}

// if(isset($_REQUEST["username"]))
// {
// echo "<td>";
// echo "<span style = 'font-size:20px; font-weight:bold;'>Name is :</span> " . $_REQUEST['username'];
// echo "</td>";

// echo "<td>";
// echo "<span style = 'font-size:20px; font-weight:bold;'>Email is :</span> " . $_REQUEST['useremail'];
// echo "</td>";

// echo "<td>";
// echo "<span style = 'font-size:20px; font-weight:bold;'>Password is : </span>" . $_REQUEST['userpass'];
// echo "</td>";

// echo "<td>";
// echo "<span style = 'font-size:20px; font-weight:bold;'>Courses is  : </span>" . implode(" , " ,  $_REQUEST['check']);
// echo "</td>";

// echo "<td>";
// echo "<span style = 'font-size:20px; font-weight:bold;'>Gender is  : </span>" .  $_REQUEST['gender'];
// echo "</td>";

// }
// echo "</tr>";
// echo "</table>"


?>

</table>

</body>
</html>