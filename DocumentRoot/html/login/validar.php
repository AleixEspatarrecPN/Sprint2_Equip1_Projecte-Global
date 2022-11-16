<?php
    include_once '../../proves_php/prova_login.php';

    $login = $_POST[''];
    $pass = $_POST['pass'];
    $loginAccount = new User();
    $loginAccount->login($login,$pass);

?>