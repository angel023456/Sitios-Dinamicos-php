<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero de Angelito</title>
</head>
<body>
    <form method="post" action="get_post.php" enctype="multipart/form-data">
        Nombre: <input type="text" name="usuario">
        <br>
        Fichero: <input type="file" name="fichero">
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>
