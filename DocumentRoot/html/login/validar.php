<?php
    include_once '../../proves_php/Aleix_ClassUsuari.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $loginAccount = new User();
    $loginAccount->login($login,$pass);
?>