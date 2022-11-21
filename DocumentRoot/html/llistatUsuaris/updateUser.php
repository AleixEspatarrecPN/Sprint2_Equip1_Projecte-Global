<?php
session_start();
include_once '../../php/ClassUsuari.php';

if(isset($_POST['updatedata'])) {

    $id_user = $_POST['id_user'];
    $name_user = $_POST['name_user'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $nick_name = $_POST['nick_name'];
    
    $changeInfo = new User();
    $changeInfo->updateUser($id_user,$name_user,$last_name,$email,$phone_number,$nick_name);
}