<!DOCTYPE html>
<?php
session_start();
$boton = "";
if(empty($_SESSION['user_name'])){
    $user = $_SESSION['user_name'];
    $boton = "<a href=\"login/login.html\"class=\"w3-bar-item w3-button w3-mobile w3-theme-d5\"style=\"width:25%;height:39px;\"> Iniciar Sesion </a>";
}else{
    $boton = "<a href=\"administrarCuenta/MyAcc.php\"class=\"w3-bar-item w3-button w3-mobile w3-theme-d5\"style=\"width:25%;height:39px;\"> Mi Cuenta </a>";
}

?>
<html>

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

<body class = "w3-theme-l8" >

    <header class="w3-animate-top">
      
      <div class="w3-bar">
        <a href="index.php" class="centrar w3-center w3-mobile" style="width:20%; height: 100%">
          <img src="img/LOGOMERENDOLA.png" class="w3-round" alt="logoMerendola" style="width:60%">
        </a>
      </div>
      
    
        <div class="w3-bar w3-row" >
            <a href="#" class="w3-bar-item w3-button w3-mobile w3-theme-d5 "style="width:25%;height: 39px;">Inicio</a>
            <a href="#" class=" w3-bar-item w3-button w3-mobile w3-theme-d5 " style="width:25%;height: 39px;">Nosotros</a>
            <?php echo $boton;?>            
            <i class= " w3-padding  fa fa-search w3-bar-item w3-button w3-mobile w3-xlarge w3-theme-d2 "style="height: 39px; width: 5%;"></i>
            <form class="w3-mobile">
              <input class = " w3-input " type="search" style="width:20%; height: 39px; background-color: #957954; color:#ffffff">
            </form>
        </div>
        <br>
        <div class="w3-bar">
      
          <div class="w3-content w3-display-container">
          
          <div class="w3-display-container mySlides">
            <img src="img/dos.jpeg" class="imagenesInicio">
            <div class="w3-display-middle w3-large w3-button w3-container w3-padding-16 w3-xlarge w3-theme-d4 ">
             Novedades
            </div>
          </div>
          <div class="w3-display-container mySlides">
            <img src="img/uno.jpg" class="imagenesInicio" >
            <div class="w3-display-middle w3-large w3-button w3-container w3-padding-16 w3-xlarge w3-theme-d4">
             Populares
            </div>
          </div>
          <div class="w3-display-container mySlides">
            <img src="img/tres.jpg" class="imagenesInicio">
            <div class="w3-display-middle w3-large w3-button w3-container w3-padding-16 w3-xlarge w3-theme-d4">
             Clásicos
            </div>
          </div>
          <div class="w3-display-container mySlides">
            <img src="img/cuatro.jpg" class="imagenesInicio">
            <div class="w3-display-middle w3-large w3-button w3-container w3-padding-16 w3-xlarge w3-theme-d4">
             Apto Vegan
            </div>
          </div>
          
          <button class="w3-button w3-display-left  w3-xlarge w3-theme-d4" onclick="plusDivs(-1)">&#10094;</button>
          <button class="w3-button w3-display-right w3-xlarge w3-theme-d4" onclick="plusDivs(1)">&#10095;</button>
          
          </div>
          
         
          <a href="#" class="w3-bar-item " style="width:10%"></a>
       
       
      
    </div>

    </header>
    <br>
    
    
   

    <div class="w3-container ">
      <h2 class = "w3-center w3-theme-d5 w3-xxlarge w3-border w3-round-xlarge">Lista de lugares</h2>
      <br>
      <div class="grid-container" >
        <div class="w3-card grid-item  w3-theme-d1 w3-center" >
          <img src="img/caferegistrado-removebg-preview.png" class="grid-img" alt="Alps">
          
          <div class="w3-container w3-center w3-theme-d5";>
            <span class="w3-large">Cafe resgistrado</span><br>
                <span>Direccion:</span><br>
                <span>Puntaje:</span><br>
                <span>Precios:</span><br>
                <span>Etiquetas:</span><br>
          </div>
          <br>
        </div>
        
       
  
        <div class="w3-card  grid-item  w3-theme-d1 " >
         
          <img src="img/amelie-removebg-preview.png" class="grid-img" alt="Alps" >
          
          <div class="w3-container w3-center w3-theme-d5 ";>
            <span class="w3-large">Amelie</span><br>
                <span>Direccion:</span><br>
                <span>Puntaje:</span><br>
                <span>Precios:</span><br>
                <span>Etiquetas:</span><br>
          </div>
          <br>
        </div>
        
  
        <div class="w3-card grid-item w3-theme-d1">
          <img src="img/tea_connection-removebg-preview.png" class="grid-img" alt="Alps">
          
          <div class="w3-container w3-center w3-theme-d5 ">
            <span class="w3-large">Tea Connection</span><br>
                <span>Direccion:</span><br>
                <span>Puntaje:</span><br>
                <span>Precios:</span><br>
                <span>Etiquetas:</span><br>
          </div>
          <br>
        </div>

        <div class="w3-card grid-item w3-theme-d1" >
          <img src="img/cairo-removebg-preview.png" class="grid-img" alt="Alps">
          
          <div class="w3-container w3-center w3-theme-d5 ">
            <span class="w3-large">El Cairo</span><br>
                <span>Direccion:</span><br>
                <span>Puntaje:</span><br>
                <span>Precios:</span><br>
                <span>Etiquetas:</span><br>
          </div>
          <br>
        </div>

        <div class="w3-card grid-item  w3-theme-d1" >
          <img src="img/tostado-removebg-preview.png" class="grid-img" alt="Alps">
          
          <div class="w3-container w3-center w3-theme-d5 ">
            <span class="w3-large">Tostado </span><br>
                <span>Direccion:</span><br>
                <span>Puntaje:</span><br>
                <span>Precios:</span><br>
                <span>Etiquetas:</span><br>
          </div>
          <br>
        </div>

        <div class="w3-card grid-item  w3-theme-d1 " >
          <img src="img/Screenshot_6-removebg-preview.png" class="grid-img" alt="Alps">
          
          <div class="w3-container w3-center w3-theme-d5 ">
            <span class="w3-large">Café Martinez</span><br>
                <span>Direccion:</span><br>
                <span>Puntaje:</span><br>
                <span>Precios:</span><br>
                <span>Etiquetas:</span><br>
          </div>
          <br>
        </div>

      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
   
     

    <footer  class="w3-container w3-theme-d3">
      <br>
      <br>
      <br>
     <br>
     
      <div class="w3-cell-row ">

        <div class="w3-container w3-center w3-cell ">
          <p>
            <a class="email w3-xlarge" target="_blank" href="mailto:lamerendola@gmail.com">
              <i class=" w3-padding fa fa-at w3-xxlarge"></i>
              lamerendola@gmail.com
            </a>
          </p>
        </div>
      
        <div class="w3-container w3-center w3-cell">
          <p>
            <a class="w3-xlarge" href="#">
              <i class="w3-padding fa fa-facebook w3-xxlarge"></i>@laMerendola
            </a>
          </p>
        </div>

        <div class="w3-container w3-center w3-cell">
          <p>
            <a class="w3-xlarge" href="#">
              <i class="w3-padding fa fa-instagram w3-xxlarge"></i>laMerendola
            </a>
          </p>
        </div>

        <div class="w3-container w3-center w3-cell">
          <p>
            <a class="w3-xlarge" href="#">
              <i class="w3-padding fa fa-twitter w3-xxlarge"></i>laMerendola
            </a>
          </p>
        </div>
      
      </div>
    <br>
    <br>
    <br>
    <br>


    </footer>

    
</body>
<script type="text/javascript" src="sliderImagenes.js"></script>
</html>
