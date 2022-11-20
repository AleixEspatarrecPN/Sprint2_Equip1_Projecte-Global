<?php
include_once '../../php/ClassUsuari.php';
session_start();

if(isset($_POST['updatedata'])) {

    $id_user = $_POST['id_user'];
    $name_user = $_POST['name_user'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $nick_name = $_POST['nick_name'];

    $updateUsr = new User();
    $updateUsr->updateUser($id_user, $name_user, $last_name, $email, $phone_number, $nick_name);


}