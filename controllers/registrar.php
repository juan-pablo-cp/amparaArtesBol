<?php
  include "../models/conexion.php";

  if(isset($_POST['nom']) || isset($_POST['correo']) || isset($_POST['contraseña']) || isset($_POST['rol'])){
    $nombre = $_POST['nom'];
    $correo = $_POST['correo'];
    $contraseña = sha1($_POST['contraseña']);
    $rol = $_POST['rol'];
    include "../models/mail.php";

    // Verificar si el email ya existe en la tabla persona y falta verificar en las dos tablas de cliente y artesano
    $query = $conexion->query("SELECT * FROM persona WHERE email = '$correo'") or die($conexion->error);

    if(mysqli_num_rows($query) > 0){
      header("Location: ../views/signup.php?error=El correo ya existe");
      exit();
    }else{
      if( $enviado ){
        if($rol == 1){
          $conexion->query("INSERT INTO persona (nombre, email, contraseña) VALUES ('$nombre', '$correo', '$contraseña')") or die($conexion->error); 
          $conexion->query("INSERT INTO cliente (ci_client) VALUES ('$conexion->insert_id')") or die($conexion->error);
        }elseif ($rol == 2 ){
          $conexion->query("INSERT INTO persona (nombre, email, contraseña) VALUES ('$nombre', '$correo', '$contraseña')") or die($conexion->error); 
          $conexion->query("INSERT INTO artesano (ci_artesano) VALUES ('$conexion->insert_id')") or die($conexion->error);
        }
      }else echo "No se pudo enviar el correo";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registerPHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-primary text-white">
  <div class="d-flex vh-100 justify-content-center align-items-center">
    <figure>
      <blockquote class="blockquote">
        <p>revise su correo por favor</p>
      </blockquote>
      <figcaption class="blockquote-footer text-black">
        app: <cite title="Source Title">Ampara Artes Bol</cite>
      </figcaption>
    </figure>
  </div>
</body>
</html>