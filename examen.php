<html>
<head></head>
<body>
<form method="POST" action="examen.php">
<label>Nombre</label>
<input type="text" name="nombre">
<input type="submit" value="Enviar">
</form>

<?php
if(isset($_POST["nombre"])){

$nombre = $_POST["nombre"];
echo "HOLA " . $nombre;

}

 ?>
</body>
</html>
