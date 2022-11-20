<?php
    include_once '../../proves_php/Aleix_ClassUsuari.php';

    $passOld = $_POST['passCurrent'];
    $passNew = $_POST['passNew'];
    $passNewConf = $_POST['passNewConfirmation'];
    
    $changePass = new User();
    $changePass->changePass($passOld,$passNew,$passNewConf);    
?>