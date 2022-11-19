<?php

include 'dbconn.php';


$id_user = $_GET['id_user'];


$conn = conn();

$query = "UPDATE users SET  hidden=NULL  WHERE id_user='$id_user'";
$query_run = mysqli_query($conn, $query);

header('Location:../html/llistatUsuaris/index.php');
die();