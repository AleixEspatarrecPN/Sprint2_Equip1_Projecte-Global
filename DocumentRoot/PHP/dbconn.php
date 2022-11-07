<?php
//Funció que permetrà la connexió a la BD
function conn(){
    $db_host='mariadb'; //nom base de dades
    $db= "pymeralias2";
    $user="root"; // usuari
    $pass="rootpwd"; //contrasenya

    $conn = mysqli_connect($db_host, $user, $pass, $db);
    if ($connexioDB->connect_error) {
        die("Connexió fallida: " . $connexioDB->connect_error);
      }
return $conn;
}
?>