<?php

$user = $_POST['user'];
$password1 = $_POST['password1'];

$conexion = mysqli_connect("localhost", "root", "", "canal+");
$consulta = "SELECT * FROM registro WHERE user = '$user' and password1='$password1'";
$result = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($result);

if ($filas>0)
{
    echo "Usuario: <strong>" . $user . "</strong><br>"
?>
<a href='./vista-sin-registro.php'>Finalizar sesión</a>
<?php
    echo  "<hr>";
    echo  "<video src='./assets/video-sin-codificar.mp4' autoplay loop></video>";
} else {
    echo "Usuario o contraseña no coincide<br>" 
?>
    <a href='./formulario-entrada.php'>Vuelve a intentarlo</a>"
<?php } 

mysqli_free_result($result);
mysqli_close($conexion);
?>    
