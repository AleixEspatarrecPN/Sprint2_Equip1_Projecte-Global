<?php
ob_start();
session_start();
?>

<?php
    //Comprovem que les variables estiguin definides. 
if(isset($_POST["correu_entra"]) && isset ($_POST["password_entra"])) {
    //Comprovem les dades a la BBDD
    $correuEntra = $_POST["correu_entra"];
    $passwordEntra = $_POST["password_entra"];
    //Variables de connexió a la base de dades, estàn definides al docker-compose.yml
    $db_host="";
    $db="";
    $user="";
    $pass="";

    //Comprovació de credencials 
    $sql= "SELECT correu, contrasenyes, tipusUsuari FROM Usuaris WHERE Usuaris.correu ='".$correuEntra."'";
    //Connexió a la base de dades
    $conn = mysqli_connect($db_host, $user, $pass, $db);
    //Declarem la variable result, que si és realitza la connexió, el query farà la consulta que li especifiquem a la variable sql.
    $result = $conn->query($sql);
    
    
    
    //Comprovem que si de la variable result, el número de files que retorna és superior a 0, es a dir, que el select retorni alguna fila de la consulta, comprovi la contrasenya
    if ($result->num_rows > 0) {
        //Declarem la variable row que agafa la variable result, on el fetch_assoc retorna un array asosiatiu
        $row = $result->fetch_assoc();

        $password_db = $row["contrasenyes"];
        //Comprovació tipus d'usuari, depenent d'aquest, carregara un dashboard o un , sinó tornarà a l'index.
        
        
        if($passwordEntra == $password_db){

            include_once "logs.php";

        $connLog = mysqli_connect($db_host, $user, $pass, $db);
        $insertLogin = "INSERT INTO Logs VALUES (DEFAULT, '".$data."','LOG-IN','".$ip."','".$sistema."','".$id."')";
        $resultLOG = $connLog->query($insertLogin);

            if($row["tipusUsuari"] =="Professor"){//Tipus indica si es alumne o professor.

   
                header("Location: ./Profes/dashboard_professors.php");//dashboard_professors.php 
                $_SESSION['CORREU_SESSIO'] = $correuEntra;
                die();
            }
            else{

                header("Location: ./Alumnes/dashboard_alumne.php");//dashboard_professors.php
                $_SESSION['CORREU_SESSIO'] = $correuEntra;
                die();
            }
            

        }
        else{
            header("Location:index.php");//Si és un usuari no vàlid, tornarà al index.php
            
            die();
        }    
    }
} 
else{
    echo "Algo va mal";//Si no arriba a comprova l'usuari o hi ha errors ens retornarà "Algo va mal"
}

?>
<?php
ob_end_flush();
?>