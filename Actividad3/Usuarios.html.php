<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="./usuarios.css">

</head>

<body>
 <h2>Iniciar sesión <br</h2>
    <h2>LOGIN</h2>

  <form action="Login.php" method="POST">
      <P><label for="nickname">Usuario</label>
    <input type="text" name="nickname"></P>

    <P><label for="password">Contraseña</label>
    <input type="text" name="password"></P>

<?php

if(isset($_GET['error'])){
$error = $_GET['error'];
if($error == "incorrecto"){
echo "<h2>El usuario o contraseña son incorrectos</h2>";
}
if($error == "vacio"){
echo "<h2>Los campos estan vacios favor de llenarlos</h2>";
}
}
?>


    
<p><input type="submit" value="Acceder"></p>


  </form>
  
    <footer> 
        <p>  Alejandro Hernandez Aranda PW1  </p>
    </footer>


</body>
</html>