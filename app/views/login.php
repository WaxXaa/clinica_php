<?php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cArr.css">
</head>
<body>
   <form action="../core/App.php" method="post">

   <h1>Sistema de login</h1>
   <input type="hiden" name="login" value="login">
    <label for="correo">Correo:</label>
   <input id="correo" type="text" placeholder="ingrese su correo" name="correo" require maxlength="100">

   <label for="contra">Contraseña:</label>
   <input id="contra" type="password" placeholder="ingrese su contraseña" name="contra" require maxlength="50" minlength="8">
   
   <input type="submit" value="Ingresar">
   
   </form> 
   
</body>
</html>
?php>