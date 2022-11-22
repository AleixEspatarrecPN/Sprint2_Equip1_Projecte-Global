<?php
include_once '../../php/ClassEmpresa.php';

if(isset($_POST['updatedata'])) {
    
    $id_company = $_POST['id_company'];
    $name_company = $_POST['name_company'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $cif = $_POST['cif'];
    
    $changeEmp = new Empresa();
    $changeEmp->updateEmp($id_company, $name_company, $email, $phone_number, $cif);
}