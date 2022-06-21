<?php

include_once "connect.php";

$nombreUsuario = mysqli_real_escape_string($conn, $_POST['nombreUsuario']);
$contra = mysqli_real_escape_string($conn, $_POST['contrasenaUsuario']);
$contrasenaUsuario = hash('sha256', $contra);

$sql = $conn->query("SELECT * FROM `credencialesUsuarios` WHERE nombre='".$user."' AND contrasena='".$contrasenaUsuario."' AND cuentaVerificada=1 AND Ban=0 ");

if($sql->num_rows > 0){

    echo json_encode(array('success' => true));

}
else{
    echo json_encode(array('success' => false, 'error' => 1));
}

$conn->close();