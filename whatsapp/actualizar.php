<?php

 include_once 'conexion.php';

    if (isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="select * from contactos where id_cotacto='$id'";
        $resultado=mysqli_query($con,$sql);

        if ($fila=mysqli_fetch_assoc($resultado))
        {
            
        }
    }
   
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $id=$_POST['id'];
       $nombre=$_POST['nombre'];
       $direccion=$_POST['direccion'];
       $email=$_POST['email'];
       $tel=$_POST['tel'];
       $cel=$_POST['cel'];
       $whatsapp=$_POST['whatsapp'];

       $sql="update contacto set nombre_suc='$nombre', direccion='$direccion', email='$email', tel='$tel', cel='$cel', whatsapp='$whatsapp' where id_contacto='$id'";


       $resultado=mysqli_query($con,$sql);


       if ($resultado)
       {
          echo "<script>
                  alert('¡Contacto Actualizado con éxito!');
                  location.href='administrar.php';
                </script>";
       }
       else
       {
          echo "<script>
                    alert('No fue posible actualizar correctamente, intentelo de nuevo ...');
                    location.href='administrar.php';
                </script>";
       }

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Contacto</title>
</head>
<body>
    <br>
    <h3><a href="administrar.php">Contacto->Administrar</a></h3>
    
    <center>
        <h1>Actualizar Contactos</h1>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <table border=1>
                <tr>
                    <td><label for="nombre">Nombre: </label></td>
                    <td><input type="text" name="nombre" value="" require></td>
                </tr>
                <tr>
                <td><label for="direccion">Direccion: </label></td>
                    <td><input type="text" name="direccion" value="" require></td>
                </tr>
                <tr>
                <td><label for="email">Email: </label></td>
                    <td><input type="email" name="email" value="" require></td>
                </tr>
                <tr>
                <td><label for="telefono">Teléfono: </label></td>
                    <td><input type="tel" name="tel" value="" require></td>
                </tr>
                <tr>
                <td><label for="cel">Celular: </label></td>
                    <td><input type="tel" name="cel" value="" require></td>
                </tr>
                <tr>
                <td><label for="whatsapp">Whatsapp: </label></td>
                    <td><input type="tel" name="whatsapp" value="" require></td>
                </tr>
                <tr>
                    <td colspan><input type="submit" name="guardar" value="Gurardar"></td>
                </tr>

            </table>
        </form>

    </center>

</body>
</html>