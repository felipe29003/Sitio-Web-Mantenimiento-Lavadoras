<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario registro</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background-image: url('imagenes/lavadorafondo.jpg'); /* Asegúrate de tener esta imagen */
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .registro-container {
      background: rgba(255, 255, 255, 0.8);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      width: 400px;
      text-align: center;
    }

    .registro-container h2 {
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

    .registro-container button {
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

    .registro-container a {
      display: block;
      margin-top: 15px;
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
    }

    .checkbox {
      display: flex;
      align-items: center;
      font-size: 12px;
      margin-top: 10px;
    }

    .checkbox input {
      margin-right: 10px;
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
<!--Body para el formulario de registro-->
<body>
<?php
  if(isset($_POST['Enviar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $id=$_POST['id'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];

    include("conexion.php");
    $sql="insert into usuario(nombre,apellido,id,correo,contraseña)
    values('".$nombre."','".$apellido."','".$id."','".$correo."','".$contraseña."')";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
      echo "<script language ='JavaScript'> alert('los datos correctos'); location.assign('login.php'); </script>";
      
    }else{
      echo "<script language ='JavaScript'> alert('algun dato esta incorrecto'); location.assign('registro.php'); </script>";
    }

    mysqli_close($conexion);



  }else{

  
?>
  <!--Elemento ancla con un simbolo unicode asociado a un triangulo apuntando hacia la izquierda, el cual dirige al usuario al Inicio-->
  <a href="Home.html" class="back-arrow">&#x25C0;</a>
  <!--Contenedor generico el cual agrupa todos los elementos del formulario de registro-->
  <div class="registro-container">
    <h2>REGISTRO</h2>
    <!--Etiqueta de tipo formulario la cual contiene 5 input, un checkbox y un submit-->
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <input type="text" name="nombre" placeholder="Ingrese su primer nombre" required>
      <input type="text" name="apellido" placeholder="Ingrese su apellido" >
      <input type="text" name="id" placeholder="Ingrese su número de identificación" required>
      <input type="email" name="correo" placeholder="Ingrese su correo" required>
      <input type="password" name="contraseña" placeholder="Ingrese su contraseña" required>

      <div class="checkbox">
        <input type="checkbox" required>
        <label>Acepta nuestras políticas de protección y tratamiento de datos?</label>
      </div>

      <button type="submit" name="Enviar">Enviar</button>
    </form>
  </div>
<?php
}
?>
</body>
</html>
