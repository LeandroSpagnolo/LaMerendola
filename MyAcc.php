<!DOCTYPE html>
<?php
session_start();
$boton = "";
if($_SESSION['user_name'] == 'admin')
{
    $boton = "<form action=\"admin.php\">
        <input class=\"w3-button w3-block w3-section w3-round-xxlarge w3-theme-d5 w3-ripple w3-padding\" type=\"submit\" value=\"Administrar Usuarios\">
</form>";
}
?>
<html>
<head>
    <title>Iniciar sesion</title>
    <link rel="icon" href="img/MerendolaFondoPestaña.png">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>    
</head>
<body class = "w3-theme-l8">
    <header class="w3-animate-top">
        <div class="w3-bar">
            <a href="index.php" class="centrar w3-center w3-mobile" style="width:20%; height: 100%">
              <img src="img/LOGOMERENDOLA.png" class="w3-round" alt="logoMerendola" style="width:60%">
            </a>
          </div>
    </header>
    <br>
    <div class="w3-container w3-card-4 w3-theme-d1 w3-round w3-content">
    <?php echo $boton;?>
        <form action="logout.php">        
            <input class="w3-button w3-block w3-section w3-round-xxlarge w3-theme-d5 w3-ripple w3-padding" type="submit" value="Cerrar Sesion">
        </form>
    </div>
</body>
</html>
