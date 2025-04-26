<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background-image: url('imagenes/lavadorafondo.jpg'); 
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.8);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      width: 350px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: #4d90fe;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
    }

    .login-container a {
      display: block;
      margin-top: 15px;
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
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
<!--Body para el formulario de inicio de sesion-->
<body>
<?php
  if(isset($_POST['Enviar'])){
    if(empty($_POST['id']) || empty($_POST['contraseña'])){
      echo "<script language ='JavaScript'> alert('uno de los campos esta vacio'); location.assign('login.php'); </script>";
    }else{
      include("conexion.php");
      session_start();
      $id=$_POST['id'];
      $contraseña=$_POST['contraseña'];
      $sql="select * from usuario where id='".$id."' and contraseña='".$contraseña."'";
      $resultado=mysqli_query($conexion,$sql);
      if($fila=mysqli_fetch_assoc($resultado)){
        $_SESSION['usuario'] = $fila['id'];
        echo "<script language ='JavaScript'> alert('bienvenido'); location.assign('Home.php'); </script>";
      }else{
        echo "<script language ='JavaScript'> alert('no se encuentra registrado en la base de datos'); location.assign('login.php'); </script>";

      }
    }
    
  }else{

  
?>
  <!--Elemento ancla con un simbolo unicode asociado a un triangulo apuntando hacia la izquierda, el cual dirige al usuario al Inicio-->
  <a href="Home.php" class="back-arrow">&#x25C0;</a>

  <!--Contenedor generico el cual agrupa todos los elementos del formulario inicio de sesion-->
  <div class="login-container">
    <h2>INICIAR SESIÓN</h2>
    <!--Etiqueta de tipo formulario la cual contiene 3 input y 1 submit-->
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <input type="text" name="id" placeholder="Ingrese su número de identificación" required>
      <input type="password" name="contraseña" placeholder="Ingrese su contraseña" required>
      <button type="submit" name="Enviar">Enviar</button>
    </form>
    <!--Elemento de tipo ancla el cual redirige al usuario a la pagina Registro.html-->
    <a href="registro.php">¿No tiene cuenta? Regístrese</a>
  </div>
<?php
  }
?>
</body>
</html>
