<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Envio de consultas</title>
</head>

<body>

<?php

$destino = "mi_nombre@mi_mail.com";
$email= $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mensaje = $_POST['mensaje'];
mail ($destino, $email, $nombre, $apellido, $mensaje);

print ("<h2>Muchas gracias por su mensaje</h2>");

?>

</body>
</html>
