<?php
    include_once '../../proves_php/prova_login.php';

    $passOld = $_POST['passCurrent'];
    $passNew = $_POST['passNew'];
    $passNewConf = $_POST['passNewConfirmation'];
    $changePass = new User();
    $changePass->changePass($passOld,$passNew,$passNewConf);
?>