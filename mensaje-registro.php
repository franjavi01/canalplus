<?php


$conexion = mysqli_connect("localhost", "root", "", "canal+");

if (!$conexion) {
    echo "error al conectar con la base de datos";
}

$user = $_POST['user'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email = $_POST['email'];

$insert = "INSERT INTO `registro`(`email`, `user`, `password1`) VALUES ('$email', '$user', '$password1') ";

$noRepeatpassword = mysqli_query($conexion, "SELECT * FROM registro WHERE password1 = '$password1'");
if ($password1 != $password2) {
    echo "La repetición de la contaseña no coincide con la original<br>";
    echo "<a href='./formulario-registro.php'>Vuelve a intentarlo</a>"; 
    exit;
}

$noRepeatUser = mysqli_query($conexion, "SELECT * FROM registro WHERE user = '$user'");
if(mysqli_num_rows($noRepeatUser) > 0){
    echo "el usuario que has introducido ya existe<br>";
    echo "<a href='./formulario-registro.php'>Escoje otro nombre de usuario</a>";
    exit;
}

$noRepeatEmail = mysqli_query($conexion, "SELECT * FROM registro WHERE email = '$email'");
if(mysqli_num_rows($noRepeatEmail) > 0){
    echo "La dirección de correo electrónica que has introducido ya existe<br>";
    echo "<a href='./formulario-registro.php'>Escoje otra dirección de correo electrónico</a>";
    exit;
}

$result = mysqli_query($conexion, $insert);

if (!$result) {
    echo "error de registro";
}else{
    echo "Te hemos enviado un enlace a tu correo electrónico. Comprueba que te ha llegado correctamente.";
}

mysqli_close($conexion);
