<?php
include_once 'configdb.php';
session_start();

//comprovació entrada de dades.
if (isset($_POST["login"]) && isset($_POST["pass"])) {

$login = $_POST["login"];
$pass = $_POST["pass"];
//utilització de la funció password_hash per a encriptar la contrasenya.
$cryptPass = password_hash($pass, PASSWORD_BCRYPT); 

//es guarda a la variable global $_SESSION el correu de l'usuari.
$_SESSION['correu_sessio'] = $login;

//es guarda la consulta sql en una variable per fer la consulta.
$sql = "SELECT Email, Contrasenya, TipusUsuari FROM Usuaris WHERE Email='$login'";
$result = mysqli_query($conn, $sql);

if ($result -> num_rows > 0){

    $row = $result -> fetch_assoc();
    $email_db = $row["Email"];
    $pass_db = $row["Contrasenya"];

    if(password_verify($pass, $pass_db) && $login == $email_db){
        //redirecció d'usuaris a les diferents pagines segons el seu tipus
        if($row["Tipus_usuari"]=="Alumne"){

        }
    echo $sql;

    }
}
}
?>