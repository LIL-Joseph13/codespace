<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "turismo";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
    <body>
        <h1>Contactanos</h1>
        <div class="formulario">
            <form method="post" class="formulario">
                <input type="text" name="nombre" placeholder="Nombre" class="entrada">
                <input type="text" name="correo" placeholder="alguien@example.com" class="entrada">
                <input type="text" name="telefono" placeholder="+52 ---" class="entrada">
                <div class="botones">
                    <input type= "submit" name="enviar" class="boton" value="Enviar">
                    <input type="reset" name="reestablecer" class="boton" value="Borrar">
                </div>
            </form>
        </div>
        <a href="index.html" class="back">Inicio</a>
    </body>
</html>

<?php

  if(isset($_POST['enviar'])){
      
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
      
      $insertar = "INSERT INTO datos Values ('$nombre','$correo','$telefono','')";
      
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>
