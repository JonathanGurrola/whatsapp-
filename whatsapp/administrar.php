<?php

    include_once "conexion.php";

    $sql="select * from contacto";
    $resultado=mysqli_query($con,$sql);
    $num_filas=mysqli_num_rows($resultado);

     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar los datos</title>
</head>
<body>
    <br>
    <center>
        <h1>Administrar Contactos</h1>
        <hr>
        <table border=1>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th>Celular</th>
                <th>Whatsapp</th>
                <th>Acciones</th>
            </tr>
            <?php
            while($fila=mysqli_fetch_assoc($resultado))
            {?>
             <tr>
                <th><?php echo $fila['id_contacto']?></th>
                <th><?php echo $fila['nombre_suc']?></th>
                <th><?php echo $fila['direccion']?></th>
                <th><?php echo $fila['email']?></th>
                <th><?php echo $fila['tel']?></th>
                <th><?php echo $fila['cel']?></th>
                <th><?php echo $fila['whatsapp']?></th>
                <th> <a href="actualizar.php?id=<?php echo $fila['id_contacto']?>">Actualizar</a></th>
             </tr>    
            <?php
            }
            ?>
        </table>
        <h2>Numero de Registros: <?php echo $num_filas?> </h2>
    </center>
</body>
</html>