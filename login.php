<?php

include_once "connect.php";

$nombreUsuario = mysqli_real_escape_string($conn, $_POST['nombreUsuario']);
$contra = mysqli_real_escape_string($conn, $_POST['contrasenaUsuario']);
$contrasenaUsuario = hash('sha256', $contra);

$seConecta = $conn->query("SELECT * FROM `credencialesUsuarios` WHERE nombre='".$nombreUsuario."' AND contrasena='".$contrasenaUsuario."'");
if($seConecta->num_row == 1)
    echo json_encode(array('success' => true));
if($seConecta->num_row == 0)
    echo json_encode(array('failed' => false, 'error' => 'No existis bichito' ));

$conn->close();
