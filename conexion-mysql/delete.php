<?php



mysql_connect('localhost','dev','mysql','Pruebas');
echo "<pre>";
$delete = "delete from users where id = 1";

$return = mysqli_query($conn,$delete);

print_r($return);
mysqli_close( $conn);