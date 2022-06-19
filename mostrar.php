<?php
$inc = include("conexion.php");
if($inc){
    $consulta = "SELECT * FROM `portafolio`";
    $resultado = mysqli_query($conex, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $ID = $row['ID'];
            $tipos = $row['tipo'];
            $chucherias = $row['chucherias'];
            $globos = $row['globos'];
            $flores = $row['flores'];
            ?>
            <div>
                <h2><?php echo $tipos;?></h2>
                <div>
                    <p>
                        <b>ID:</b><?php echo $ID; ?><br>
                        <b>Chucherias:</b><?php echo $chucherias; ?><br>
                        <b>Globos:</b><?php echo $globos; ?><br>
                        <b>Flores:</b><?php echo $flores; ?><br>
                    </p>
                </div>
          </div>
          <?php
        }

    }
}

if($inc){
    $consulta = "SELECT * FROM `datos`";
    $resultado = mysqli_query($conex, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $ID = $row['ID'];
            $cedula = $row['cedula'];
            $Nombre = $row['Nombre'];
            $Apellido = $row['Apellido'];
            $Correo = $row['Correo'];
            $telefono = $row['telefono'];
            ?>
            <div>
                <h2><?php echo $Nombre;?></h2>
                <div>
                    <p>
                        <b>ID:</b><?php echo $ID; ?><br>
                        <b>Cedula:</b><?php echo $cedula; ?><br>
                        <b>Apellido:</b><?php echo $Apellido; ?><br>
                        <b>Correo:</b><?php echo $Correo; ?><br>
                        <b>telefono:</b><?php echo $telefono; ?><br>
                    </p>
                </div>
          </div>
          <?php
        }

    }
}

if($inc){
    $consulta = "SELECT * FROM `direccion`";
    $resultado = mysqli_query($conex, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $ID = $row['ID'];
            $direccion = $row['direccion'];
            $codigo = $row['codigo'];
            $municipio = $row['municipio'];
            ?>
            <div>
                <h2><?php echo $direccion;?></h2>
                <div>
                    <p>
                        <b>ID:</b><?php echo $ID; ?><br>
                        <b>Municipio:</b><?php echo $municipio; ?><br>
                        <b>Codigo:</b><?php echo $codigo; ?><br>
                    </p>
                </div>
          </div>
          <?php
        }

    }
}

if($inc){
    $consulta = "SELECT * FROM `formulario`";
    $resultado = mysqli_query($conex, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $ID = $row['ID'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $telefono = $row['telefono'];
            $correo = $row['correo'];
            $inquietud = $row['inquietud'];
            ?>
            <div>
                <h2><?php echo $nombre;?></h2>
                <div>
                    <p>
                        <b>ID:</b><?php echo $ID; ?><br>
                        <b>Apellido:</b><?php echo $apellido; ?><br>
                        <b>Telefono:</b><?php echo $telefono; ?><br>
                        <b>Correo:</b><?php echo $correo; ?><br>
                        <b>Inquietud:</b><?php echo $inquietud; ?><br>
                    </p>
                </div>
          </div>
          <?php
        }

    }
}


?>