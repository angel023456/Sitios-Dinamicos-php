<?php



mysql_connect('localhost','dev','mysql','Pruebas');
echo "<pre>";
$update = "update users set name  = 'alex22 where id = 1";
$return = mysqli_query($conn, $update)

print_r(return);
mysqli_close ($conn);