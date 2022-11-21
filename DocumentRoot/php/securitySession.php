<?php 
session_start(); //creem un inici de sessió que ha de anar com a primer pas del codi php
if(isset($_SESSION['idUsr_session'])){ //compara que la variable está definida
} else {
  header("Location: ../login/index.php"); //si el resultat de la condició del if es fals llavors ens dirigirà a index.html
  die();
}
?>