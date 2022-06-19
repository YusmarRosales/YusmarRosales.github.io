<?php
include("conexion.php"); 

if(isset($_POST['ENVIAR'])){
    if(strlen($_POST['tipo'])>=1 && 
        strlen($_POST['chucherias'])>=1 && 
        strlen($_POST['globos'])>=1 &&
        strlen($_POST['flores'])>=1){
            $tipos = trim($_POST['tipo']);
            $chucherias = trim($_POST['chucherias']);
            $flores = trim($_POST['globos']);
            $globos = trim($_POST['flores']);
            $consulta = "INSERT INTO `portafolio`(`tipo`, `chucherias`, `globos`, `flores`) VALUES ('$tipos','$chucherias','$flores','$globos')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="info">Has incrito correctamente tu arreglo</h3>
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