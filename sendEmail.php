<?php

$to      = $emailUsuario;

$subject = 'Registro | Verificación'; 
$message = '
 
¡Bienvenid@ a La Merendola!
El último paso es la verificación de tu cuenta. Solo tenes que hacer click en el siguiente link:

 
https://agssoft.ar/CUATRO/check.php?user='.$nombreUsuario.'&email='.$emailUsuario.'
 
';
                     
$headers = 'From:noreply@laMerendola.com' . "\r\n";
mail($to, $subject, $message, $headers);


?>
