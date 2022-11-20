<?php
session_start();
include 'dbconn.php';

if(isset($_POST['updatedata'])) {

    $id_user = $_POST['id_user'];
    $name_user = $_POST['name_user'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $nick_name = $_POST['nick_name'];

    $conn = conn();

    $query = "UPDATE users SET name_user='$name_user', last_name='$last_name', email='$email', phone_number=' $phone_number', nick_name='$nick_name'  WHERE id_user='$id_user'  ";
    $query_run = mysqli_query($conn, $query);

    header('Location:../html/llistatUsuaris/index.php');
}