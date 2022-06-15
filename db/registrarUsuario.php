<?php

    //En este archivo php nos encargaremos de añadir un nueva tarea
    //en nuestra base de datos.

    include('database.php');

    $name = $_POST['nombreUsuario'];
    $password = $_POST['contraseñaUsuario'];
	$email = $_POST['emailUsuario'];

    //isset: determina si una variable está definida y no es null.
    if (isset($name) && isset($password) && isset($email)) {
        //Con real_escape_string evitamos inyección SQL.
        $name = $connection->real_escape_string($name);
        $password = $connection->real_escape_string($password);
		$email = $connection->real_escape_string($email);
        if (!empty($name) && !empty($password) && !empty($email)) {
            $query = "INSERT into credencialesUsuarios(nombre, contraseña, email) VALUES ('$name', '$password', '$email')";
            $result = mysqli_query($connection, $query);

            if(!$result) {
                die('Query Error'. msqli_error($connection));    
            }

            echo "Task Added Successfully";
        }      
    }
?>