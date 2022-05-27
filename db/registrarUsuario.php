<?php

include "credenciales.inc";

//Datos colocados por el usuario
$nombreUsuario = $_POST['user'];
$contraseñaUsuario = $_POST['contraseña'];
$emailUsuario = $_POST['email'];

//Conectarse a la base de datos
$conn = new mysqli($HOST,$USER,$PASS,$BASE);

//checkear la conexion
$conn = new mysqli($HOST,$USER,$PASS,$BASE);
if($conn->connect_error)
{
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into credencialesUsuarios(nombre, contraseña, email) values(?, ?, ?)");
	$stmt->bind_param("sss",$nombreUsuario,$contraseñaUsuario,$emailUsuario);
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}
?>
