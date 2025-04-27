<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Actualizar datos</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background-image: url('imagenes/lavadorafondo.jpg'); /* Usa la misma imagen que en login/registro */
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.8);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      width: 400px;
      text-align: center;
    }

    .form-container h2 {
      margin-bottom: 20px;
    }

    input[type="text"], input[type="email"], input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    label {
      display: block;
      text-align: left;
      font-size: 14px;
      margin-top: 10px;
    }

    .form-container button {
      width: 100%;
      padding: 12px;
      background-color: #4CAF50;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 20px;
    }

    .back-arrow {
      position: absolute;
      top: 30px;
      left: 30px;
      font-size: 30px;
      color: #000;
      text-decoration: none;
    }
  </style>
</head>
<!--Body para el formulario de actualizar datos-->
<body>
<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_SESSION['usuario'])) {
    $idSesion = $_SESSION['usuario'];
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);

    $actualizaciones = [];

    if (!empty($nombre)) {
      $actualizaciones[] = "nombre='$nombre'";
    }
    if (!empty($apellido)) {
      $actualizaciones[] = "apellido='$apellido'";
    }
    if (!empty($correo)) {
      $actualizaciones[] = "correo='$correo'";
    }
    if (!empty($contraseña)) {
      $actualizaciones[] = "contraseña='$contraseña'";
    }

    if (!empty($actualizaciones)) {
      // Unimos las partes con coma
      $sql = "UPDATE usuario SET " . implode(", ", $actualizaciones) . " WHERE id='$idSesion'";

      $resultado = mysqli_query($conexion, $sql);

      if ($resultado) {
        echo "<script language='JavaScript'> alert('Datos actualizados correctamente'); location.assign('Home.php'); </script>";
      } else {
      echo "<script language='JavaScript'> alert('Error al actualizar los datos'); location.assign('actualizar.php'); </script>";
      }
      } else {
        echo "<script language='JavaScript'> alert('No se ingreso ningun dato'); location.assign('actualizar.php'); </script>";
      }
      mysqli_close($conexion);
    } else{
      echo "<script language='JavaScript'> alert('Acceso denegado, debe iniciar sesion'); location.assign('login.php'); </script>";
    }
} else {
?>
<!-- Enlace de regreso -->
<a href="Home.php" class="back-arrow">&#x25C0;</a>

<!-- Formulario de actualización -->
<div class="form-container">
  <h2>ACTUALIZAR DATOS</h2>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>Actualice primer nombre</label>
    <input type="text" name="nombre" placeholder="Ingrese su primer nombre">

    <label>Actualice su apellido</label>
    <input type="text" name="apellido" placeholder="Ingrese su apellido">

    <label>Actualice su correo</label>
    <input type="email" name="correo" placeholder="Ingrese su correo">

    <label>Actualice su contraseña</label>
    <input type="password" name="contraseña" placeholder="Ingrese su contraseña">

    <button name="Enviar" type="submit">Enviar</button>
  </form>
</div>
<?php
}
?>
</body>
</html>

