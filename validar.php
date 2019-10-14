<?php 
session_start(); //Inicializar la session
//recibir las variables
$a=$_POST['user']; 
$b=$_POST['password']; 
//condicion para las preguntas
if($a=="yuri" and $b=="programacionweb")
{ 
   $_SESSION['acceso']='ok'; 
   $_SESSION['usuario']=$a; 
   header('location: story.php');//en caso que este correcto esta pagina ingresa 
}
else
  { //si es incorrecto
   session_destroy();  //la session se destruye
   header('location:login.php'); //pagina inicial
  } 
?>
