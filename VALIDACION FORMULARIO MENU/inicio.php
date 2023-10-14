<?php

    session_start();
    
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>


    <style>
    html {
        background-image: url("images/reparacion.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        height: 100%;
    }

    body {
        background: transparent; /* Asegura que el fondo del cuerpo sea transparente */
        margin: 0; /* Elimina los márgenes predeterminados del cuerpo */
    }

    h1 {
        text-align: left; /* Alinea el texto en el centro de la página */
        padding-top: 50px; /* Añade espacio superior al título para que no esté justo en el borde superior */
        margin-left:70px;
    }

    a{
        font-size:30px;
        margin-left:70px;
        margin-bottom:200px;
    }
</style>

</head>


<body>
<h1 > WELCOME TO MY PAGE</h1>

<a href="php/cerrar_sesion.php ">CERRAR SESION</a>  

</body>
</html>