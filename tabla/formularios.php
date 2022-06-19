<?php
include("conexion.php"); 

if(isset($_POST['ENVIAR'])){
    if(strlen($_POST['nombre'])>=1 && 
        strlen($_POST['apellido'])>=1 && 
        strlen($_POST['correo'])>=1 &&
        strlen($_POST['telefono'])>=1 &&
        strlen($_POST['inquietud'])>=1){
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $correo = trim($_POST['correo']);
            $telefono = trim($_POST['telefono']);
            $inquietud = trim($_POST['inquietud']);
            $consulta = "INSERT INTO `formulario`(`nombre`, `apellido`, `telefono`, `correo`, `inquietud`)  VALUES ('$nombre','$apellido','$telefono','$correo','$inquietud')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="info">Te has incrito correctamente</h3>
                <?php
            }else{
                ?>
                <h3 class="error">Ha ocurrido un error</h3>
                <?php
            }       
    }else{
        ?>
         <h3 class="error">Por favor complete los campos</h3>
        <?php
    }
}
?>











