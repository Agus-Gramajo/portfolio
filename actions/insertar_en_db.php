<?php
//if(isset($_POST['btn1'])){

include("abrir_conexion.php");

if(mysqli_query($conexion, "INSERT INTO contactos (nombre,mail,asunto,mensaje) values ('$name','$email','$subject','$msg')")){
  //echo "Se insertaron Correctamente";
}

else{
  //echo "Hubo un error";
}

include("cerrar_conexion.php");

echo "done";
//} 
?>