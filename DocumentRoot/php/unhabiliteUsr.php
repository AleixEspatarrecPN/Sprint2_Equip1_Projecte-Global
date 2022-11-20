<?php
session_start();
include 'dbconn.php';


    $id_user = $_GET['id_user'];


    $discharge_date = date("Y-n-j");

    $conn = conn();

    $query = "UPDATE users SET  hidden='$discharge_date'  WHERE id_user='$id_user'";
    $query_run = mysqli_query($conn, $query);

    header('Location:../html/llistatUsuaris/index.php');
    die();