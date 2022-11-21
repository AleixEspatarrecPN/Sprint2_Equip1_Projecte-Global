<?php
session_start();
include_once '../../php/ClassUsuari.php';

if(isset($_POST['createUser'])) {
    $dni = $_POST['dni'];
    $name_user = $_POST['name_user'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
//$emblems = $_POST['emblems'];
    $nick_name = $_POST['nick_name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
//$id_company = $_POST['id_company'];
    $type_user = $_POST['type_user'];

    $createUser = new User();
    $createUser->createUser($dni, $name_user, $last_name, $phone_number, $email, $nick_name, $password, $type_user);
}