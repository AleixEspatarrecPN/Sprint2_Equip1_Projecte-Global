<?php
include_once "../../proves_php/Julia_ClassUsuari.php";


$nickname = $_POST['nick_name']; //el POST es referencia a través del "name" del HTML
//$nameCompany = $_POST['nameCompany'];
$email= $_POST['email'];
$typeUsr = $_POST['type_user'];
$id = $_POST['id'];
$dni = $_POST['dni'];
$nom = $_POST['nom'];
$cognom = $_POST['cognom'];
$telefon = $_POST['telefon'];
$idEmpresa = $_POST['idEmpresa'];
$ocult = $_POST['ocult'];
$pass = $_POST['pass'];

$changeInfo = new User();
$changeInfo->CrearUsuari1($nickname, $email, $pass, $typeUsr, $id, $dni, $nom, $cognom, $telefon, $idEmpresa, $ocult);
?>