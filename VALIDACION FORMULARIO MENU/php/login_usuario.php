<?php
    include 'conexion_db.php';

    session_start();

    $nombre = $_POST['nombree'];
    $num = $_POST['number'];


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
     nombre='$nombre' and numero='$num'");

    if (mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $num;
        header("location: ../inicio.php");
        exit;
    } else {    
        echo '
            <script>
                alert("Usuario no existe por favor registrese");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }



?>