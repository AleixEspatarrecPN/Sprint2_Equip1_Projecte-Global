<?php
session_start();
include_once '../../php/ClassEmpresa.php';

if(isset($_POST['createEmp'])) {
    $name_company = $_POST['name_company'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $cif = $_POST['cif'];

    $createEmp = new Empresa();
    $createEmp->createEmp($name_company, $email, $phone_number, $cif);
}
