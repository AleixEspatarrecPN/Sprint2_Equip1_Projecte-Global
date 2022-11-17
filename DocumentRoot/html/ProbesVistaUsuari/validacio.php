<?php
include_once "../../proves_php/Julia_ClassUsuari.php";


$nickname = $_POST['nick_name'];
//$nameCompany = $_POST['nameCompany'];
$email= $_POST['email'];
$typeUsr = $_POST['type_user'];

$changeInfo = new User();
$changeInfo->CrearUsuari1($nickname, $email, $typeUsr);

?>