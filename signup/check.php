<?php

include_once "connect.php";


if(isset($_GET['user']) && !empty($_GET['user']) AND isset($_GET['email']) && !empty($_GET['email'])){
    $user = mysqli_real_escape_string($conn, $_GET['user']);
    $email = mysqli_real_escape_string($conn, $_GET['email']);    
//usuario, Activo, hash
//  AND Activo='0'            

    $sql = $conn->query("SELECT email, cuentaVerificada, nombre FROM `credencialesUsuarios` WHERE nombre='".$user."' AND cuentaVerificada='0' AND email='".$email."' ") or die(mysqli_error());
    if($row_cnt = $sql->num_rows > 0){
        // Activar
        $sql = $conn->query("UPDATE `credencialesUsuarios` SET cuentaVerificada=1 WHERE email='".$email."' AND cuentaVerificada=''AND nombre='".$user."' ") or die(mysqli_error());
        echo '<div class="statusmsg">Tu cuenta está activada, ya puedes iniciar sesión</div>';
        session_start();
        $_SESSION['user_name'] = $user;
        header('Location: ../CUATRO/verifyAccount.html');
    }else{
        // Error
        //echo '<div class="statusmsg">La url es inválida o ya has registrado tu cuenta</div>';
        header('Location: /CUATRO/error.html');
    }
                 
} else{
    // Invalid approach
    //echo '<div class="statusmsg">Error. Por favor, emplear el enlace que fue enviado por correo electrónico.</div>';
    header('Location: /CUATRO/error.html');
}



//$sql->free();


$conn->close();


?>
