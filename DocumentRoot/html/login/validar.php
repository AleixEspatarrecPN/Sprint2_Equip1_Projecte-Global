<?php
    include_once '../../proves_php/prova_login.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $loginAccount = new User();
    $loginAccount->login($login,$pass);

?>