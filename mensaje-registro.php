<?php
if ($_POST['password1'] != $_POST['password2']) {
    echo "La repetición de la contaseña no coincide con la original. <a href='./formulario-registro.php'>Volver a formulario</a>"; 
}else{
    echo "Te hemos enviado un enlace a tu correo electrónico. Comprueba que te ha llegado correctamente."; 
}
  
