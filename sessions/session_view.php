<?php 
session_start();
?>



<?php

if(isset($_SESSION['color']))
{
echo $_SESSION['color'];
}
else {
    echo "no session found";
}

?>