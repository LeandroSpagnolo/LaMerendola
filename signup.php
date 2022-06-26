<?php

include_once "connect.php";

$nombreUsuario = mysqli_real_escape_string($conn, $_POST['nombreUsuario']);
$emailUsuario = mysqli_real_escape_string($conn, $_POST['emailUsuario']);
$contrasenaUsuario = mysqli_real_escape_string($conn, $_POST['contrasenaUsuario']);

if(!filter_var($emailUsuario, FILTER_VALIDATE_EMAIL)){
    echo json_encode(array('success' => false, 'error' => 'invalid mail'));
} else{

    $mail_check = $conn->query("SELECT * FROM `credencialesUsuarios` WHERE email='".$emailUsuario."' ");

    if($mail_check->num_rows > 0 ){
        echo json_encode(array('success' => false, 'error' => 'mail already used'));
        $conn->close();
        die();
    }

        $userPassword=hash("sha256",$contrasenaUsuario);
        $time = time();
        $date = date('Y-m-d H:i:s', $time);
        $sql = "INSERT INTO credencialesUsuarios (nombre, contrasena, email, ban, creacionDeCuenta, ultimaVezActivo, cuentaVerificada) VALUES ( '".$nombreUsuario."','".$userPassword."','".$emailUsuario."',0,'".$date."','".$date."',0 )";
        
    include "sendEmail.php";

    if($conn->query($sql) == TRUE){
        echo json_encode(array('success' => true));
    }

}
$conn->close();
