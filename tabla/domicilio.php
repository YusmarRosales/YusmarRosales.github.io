<?php
include("conexion.php"); 

if(isset($_POST['ENVIAR'])){
    if(strlen($_POST['direccion'])>=1 &&
        strlen($_POST['municipio'])>=1){
            $direccion = trim($_POST['direccion']);
            $codigo = trim($_POST['codigo']);
            $municipio = trim($_POST['municipio']);
            $consulta = "INSERT INTO `direccion`(`direccion`, `codigo`, `municipio`) VALUES ('$direccion','$codigo','$municipio')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="info">Has incrito correctamente tu direccion de domicilio</h3>
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