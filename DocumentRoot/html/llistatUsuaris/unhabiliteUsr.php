<?php
include_once '../../php/ClassUsuari.php';
session_start();

    $id_user = $_GET['id_user'];

    $unhabiliteUsr = new User();
    $unhabiliteUsr->unhabiliteUser($id_user);
