
<?php

    session_start();
    
    if(isset($_SESSION['usuario'])){
       
        header("location: inicio.php");
        
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    
    
    <title>Formulario</title>
</head>
<body>

    <div class="content">

        <div class="menu container1">
           <a href="index.html" class="logo">logo</a> 
           <input type="checkbox" id="menu"/>
           <label for="menu">
             <img src="images/menu.png" class="menu-icono" alt="">
           </label>   
           <nav class="navbar">
                <ul>
                    <li> <a href="principal.html">Inicio</a></li>
                    <li> <a href="temas.html">Temas</a></li>
                    <li> <a href="index.php">Login</a></li>
                    
                </ul>
           </nav>
        </div>
        <link rel="stylesheet" href="styleH.css">
    </div>

    <div class="container2">
        <div class="form sign-up-container"> 
            <h1 class="si">REGISTRARSE</h1>
            <form action="php/register_db.php" method="POST" class="formulario">
                <input type="text" placeholder="Nombre" name="nombre" id="name">
                
                <input type="numero" placeholder="Numero Identificacion" name="numero" id="numero">
                <a class="ok-account">¿Ya tienes una cuenta?</a>
                <input type="Submit" value="Registrarse">
            </form>    
        </div>

        <div class="form sign-in-container"> 
            <h1 class="si">Iniciar Sesion</h1>
            <form action = "php/login_usuario.php" method="POST" class="formulario2">
                <input type="text" name="nombree" placeholder="Nombre" id="name2">
                
                <input type="numero" name = "number" placeholder="Numero Identificacion" id="numero2">

                <a class="no-account">¿Aun no tienes cuenta?</a>
                <input type="Submit" value="Inicar Sesion">
            </form>    
        </div>
    </div>
    
    <p class="notify check_notify">TE REGISTRASTE CORRECTAMENTE</p>
    <p class="notify error_notify">Ocurrio un error, por favor verifica tus datos</p>
    
    <script src="script.js"></script>
</body>
</html>