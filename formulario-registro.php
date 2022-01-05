<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <?php require 'conexionBaseDatos.php'; ?>
    <form action="./mensaje-registro.php" method="post">
        <input type="text" name="user" placeholder="Nombre de usuario" required><br>
        <input type="password" name="password1" placeholder="Contraseña" required><br>
        <input type="password" name="password2" placeholder="Repite contraseña" required><br>
        <input type="email" name="email" placeholder="Dirección e-mail" required><br> 
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>