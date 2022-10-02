<?php
include_once "../db/connect.php";

session_start();

$nombre=mysqli_real_escape_string($conn, $_POST['nombreUsuario']);
$userPassword=mysqli_real_escape_string($conn, $_POST['contrasenaUsuario']);
$userPass = hash("sha256", $userPassword);
$sql = $conn->query("SELECT * FROM `credencialesUsuarios` WHERE nombre='".$nombre."' AND cuentaVerificada=1");

if($row_cnt = $sql->num_rows == 1){


    $row= $sql->fetch_array(MYSQLI_ASSOC);
    $passhash = $row['contrasena'];
    if($row['Ban'])
    {
        $sql->close();
        echo json_encode(array('success' => false, 'error' => 3));
        $conn->close();
        return 0;
    }
    if($userPass == $passhash){
        //login was successful
        $time = time();
        $ultimaVezActivo = date('Y-m-d H:i:s', $time);
        $_SESSION['user_name'] = $row['nombre'];
        $sql->close();
        $update_ultimaVezActivo = $conn->query("UPDATE credencialesUsuarios SET ultimaVezActivo=".$ultimaVezActivo."' WHERE nombre='".$row['nombre']."' ");
        echo json_encode(array('success' => true));
    } else {
        //incorrect password

        echo json_encode(array('success' => false, 'error' => "contra incorrecta"));
    }
    
} else echo json_encode(array('success' => false, 'error' => 2));
//invalid user



$conn->close();


