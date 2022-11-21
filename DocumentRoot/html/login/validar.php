<?php
    include_once '../../php/ClassUsuari.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $loginAccount = new User();
    $loginAccount->login($login,$pass);
?>