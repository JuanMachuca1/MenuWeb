<?php
    include 'conexion_db.php';

    $nombre_usuario = $_POST['nombre'];
    $numero = $_POST['numero'];
   

    $query ="INSERT INTO usuarios(nombre,numero)
             VALUES ('$nombre_usuario','$numero')";



$check_numero = mysqli_query($conexion, "SELECT * FROM usuarios WHERE numero='$numero'");

if(mysqli_num_rows($check_numero) > 0) {
    echo '
        <script>
            alert("Este numero de identificacion ya esta en uso por favor utilize otro");
            window.location = "../index.php";
        </script>
    ';

    exit();
}

        $ejecutar = mysqli_query($conexion,$query);


        if($ejecutar){
            echo '
                <script>
                    alert("Usuario almacenado exitosamente");
                    
                    </script>
            ';
        } else {
            echo '
                <script>
                    alert("Usuario no almacenado ocurrio un error");
                    window.location = "../index.php";
                </script>
            ';
        }    

       

        mysqli_close($conexion);
  

?>