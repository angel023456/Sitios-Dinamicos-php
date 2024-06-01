<?php



mysql_connect('localhost','dev','mysql','Pruebas');
echo "<pre>";
print_r($_conn);
$insert = "INSERT INTO users (name, email) VALUES ('angel', 'angel@es.es')";

return = mysqli_query ($conn, $insert);

print_r(($return));
mysqli_close($_conn);

?>
