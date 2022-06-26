<!DOCTYPE html>
<?php
include_once "connect.php";
session_start();
?>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>

<head>
    <!-- Aca declaramos que va en la pestaña del navegador, título e ícono-->
    <title>La Merendola</title>
    <link rel="icon" href="img/MerendolaFondoPestaña.png">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>    
</head>
<body >
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Mail</td>
                <td>Ban</td>
                <td>Verificado</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $resultados = $conn->query("SELECT nombre, email, Ban, cuentaVerificada FROM credencialesUsuarios");
            while($row = $resultados->fetch_array(MYSQLI_ASSOC))
            {
                echo "<tr>";
                echo "<td>".$row['nombre']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td contenteditable='true'>".$row['Ban']."</td>";
                echo "<td>".$row['cuentaVerificada']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <form action="phpSearch.php" method="post">
        Search 
    <input type="text" name="search"><br>
        <input type ="submit">
    </form>
</body>
</html>

