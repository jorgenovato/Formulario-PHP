
<?php

$error = "";

if($_POST){

    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $correo =  $_POST["Correo"];
    $telefono = $_POST["Telefono"];
    $Asunto =  $_POST["Asunto"];
    $Direccion = $_POST["Direccion"];
    $Mensaje = $_POST["Mensaje"];
    
    $nombre = filter_var(htmlspecialchars($nombre), FILTER_SANITIZE_STRING);
    $apellido = filter_var(htmlspecialchars($apellido), FILTER_SANITIZE_STRING);
    $correo = filter_var(htmlspecialchars($correo), FILTER_SANITIZE_EMAIL);
    $telefono = filter_var(htmlspecialchars($telefono), FILTER_SANITIZE_NUMBER_INT);
    $Asunto = filter_var(htmlspecialchars($Asunto), FILTER_SANITIZE_STRING);
    $Direccion = filter_var(htmlspecialchars($Direccion), FILTER_SANITIZE_STRING);
    $Mensaje = filter_var(htmlspecialchars($Mensaje), FILTER_SANITIZE_STRING);
    

    if( $nombre ==="") {
      $error = $error . "Ingrese su Nombre <br> ";
    }
    if( $apellido ==="") {
      $error = $error . "Ingrese su Apellido <br> ";
    }
    if( $correo ==="") {
      $error = $error . "Ingrese su Correo <br> ";
    }
    if( $telefono ==="") {
      $error = $error . "Ingrese su Telefono <br> ";
    }
    if( $Asunto ==="") {
      $error = $error . "Ingrese un Asunto <br> ";
    }
    if( $Direccion ==="") {
      $error = $error . "Ingrese una Direccion <br> ";
    }
    if( $Mensaje ===""){
      $error = $error . "Ingrese una Mensaje <br> ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Formulario</h1>

    <div class="container">

      <?php if ($error === "")  { ?>    

        <h1>Mensaje enviado</h1>

      <?php } else { ?>    

      <div class="container error">

          <h2 > <?php echo $error; ?></h2>

      </div>
      
      <?php }  ?>    

    </div>
  </body>
</html>