<?php
include("conexion.php"); 

if(isset($_POST['ENVIAR'])){
    if(strlen($_POST['Nombre'])>=1 && 
        strlen($_POST['Apellido'])>=1 && 
        strlen($_POST['Correo'])>=1){
            $cedula = trim($_POST['cedula']);
            $Nombre = trim($_POST['Nombre']);
            $Apellido = trim($_POST['Apellido']);
            $Correo = trim($_POST['Correo']);
            $telefono = trim($_POST['telefono']);
            $consulta = "INSERT INTO `datos`(`cedula`, `Nombre`, `Apellido`, `Correo`, `telefono`) VALUES ('$cedula','$Nombre','$Apellido','$Correo','$telefono')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="info">Has incrito correctamente tus datos</h3>
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