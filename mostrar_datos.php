<?php

$inc = include("conexion_db.php");
if ($inc) 
{
    $consulta = "SELECT * FROM animales";
    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado) 
    {
        while($row = $resultado->fetch_array()) 
        {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $propietario = $row['propietario'];
            $telefono = $row['telefono'];
            ?>
            <div>
                <h2><?php echo $nombre; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $id; ?><br>
                        <b>PROPIETRARIO: </b> <?php echo $propietario; ?><br>
                        <b>TELEFONO: <?php echo $telefono; ?></b>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}


?>