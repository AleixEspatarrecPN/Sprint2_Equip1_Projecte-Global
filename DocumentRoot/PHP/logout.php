<?php

session_start();

//buidem les dades de la sessió previament a la seva destrucció
session_unset(); 
session_destroy();

header("Location: login/index.php");
die();

?>