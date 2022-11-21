<?php
    include_once '../../php/ClassUsuari.php';

    $passOld = $_POST['passCurrent'];
    $passNew = $_POST['passNew'];
    $passNewConf = $_POST['passNewConfirmation'];
    $changePass = new User();
    $changePass->changePass($passOld,$passNew,$passNewConf);
    
?>