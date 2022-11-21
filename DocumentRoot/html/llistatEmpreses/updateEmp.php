<?php
include_once '../../proves_php/Julia_ClassUsuari.php';

if(isset($_POST['updatedata'])) {

    $nomusuari = $_POST['nomusuari']; //el POST es referencia a través del "name" del HTML
    $email= $_POST['email'];
    $typeUsr = $_POST['type_user'];
    $id = $_POST['id'];
    $dni = $_POST['dni'];
    $nom = $_POST['nom'];
    $cognom = $_POST['cognom'];
    $telefon = $_POST['telefon'];
    $idEmpresa = $_POST['idEmpresa'];
    $pass = $_POST['pass'];
    
    $changeInfo = new User();
    $changeInfo->CrearUsuari3($nomusuari, $email, $pass, $typeUsr, $id, $dni, $nom, $cognom, $telefon, $idEmpresa);
}