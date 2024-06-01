
<?php

mysql_connect('localhost','dev','mysql','Pruebas');
echo "<pre>";

$sql = "select id , name , email , created from users";

$result = mysqli_query ( $conn, $sql );
$rows = mysqli_fetch_array($result, mysql_num);
print_r ($rows);
do {
    $data[]$rows

}while ($rows = mysqli_fetch_array($result, mysql_num));

print_r ($data);