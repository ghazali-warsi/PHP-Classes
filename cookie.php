<?php
$cookie_name = 'city';
$cookie_value = 'karachi';


// setcookie(name,value,time,path)
setcookie($cookie_name , $cookie_value , time() + (86400 * 30) , "/" );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Data</title>
</head>
<body>

<?php

if(isset($_COOKIE[$cookie_name]))
{
    echo $_COOKIE[$cookie_name] . "<br>"; 
}else{
    echo "no cookie is set";
}
?>


</body>
</html>
