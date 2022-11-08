<?php

session_start();

//buidem les dades de la sessió previament a la seva destrucció
session_unset(); 
session_destroy();

header("Location: Login/index.html");
die();

?>