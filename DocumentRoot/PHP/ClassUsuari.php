<?php
include_once '../PHP_metodes/dbconn.php';

    class User {
        #Propietats
        private $Id;
        private $DNI;
        private $Nom;
        private $Cognom;
        private $Telefon;
        private $Email;
        private $Insignies;
        private $NomUsuaris;
        private $PassUsuari;
        private $TipusUsuari;
        private $IdEmpresa;

        #Creem el constructor, per crear l'usuari.
        function __construct( $Id, $DNI, $Nom, $Cognom, $Telefon, $Email, $Insignies, $NomUsuaris, $PassUsuari, $TipusUsuari, $IdEmpresa) {
            $this->Id = $Id;
            $this->DNI = $DNI;
            $this->Nom = $Nom;
            $this->Cognom = $Cognom;
            $this->Telefon = $Telefon;
            $this->Email = $Email;
            $this->Insignies = $Insignies;
            $this->NomUsuaris = $NomUsuaris;
            $this->PassUsuari = $PassUsuari;
            $this->TipusUsuari = $TipusUsuari;
            $this->IdEmpresa = $TipusUsuari;
        }

        #Getters i Setters
        function getId() { return $this -> Id; }
        function setId($Id) { $this -> Id = $Id; }

        function getDNI() { return $this -> DNI; }
        function setDNI($DNI) { $this -> DNI = $DNI; }

        function getNom() { return $this -> Nom; }
        function setNom($Nom) { $this -> Nom = $Nom; }

        function getCognom() { return $this -> Cognom; }
        function setCognom($Cognom) { $this -> Cognom = $Cognom; }

        function getTelefon() { return $this -> Telefon; }
        function setTelefon($Telefon) { $this -> Telefon = $Telefon; }

        function getEmail() { return $this -> Email; }
        function setEmail($Email) { $this -> Email = $Email; }

        function getInsignies() { return $this -> Insignies; }
        function setInsignies($Insignies) { $this -> Insignies = $Insignies; }

        function getNomUsuaris() { return $this -> NomUsuaris; }
        function setNomUsuaris($NomUsuaris) { $this -> NomUsuaris = $NomUsuaris; }

        function getPassUsuari() { return $this -> PassUsuari; }
        function setPassUsuari($PassUsuari) { $this -> PassUsuari = $PassUsuari; }

        function getTipusUsuari() { return $this -> TipusUsuari; }
        function setTipusUsuari($TipusUsuari) { $this -> TipusUsuari = $TipusUsuari; }

        function getIdEmpresa() { return $this -> IdEmpresa; }
        function setIdEmpresa($IdEmpresa) { $this -> IdEmpresa = $IdEmpresa; }

        
        #Preparació de les funcions
        public function mostrarUsr(){
            
            }

        public function updateUsr(){
            //aquesta funció revisarà si hi ha canvis i en cas afirmatiu aplicarà els canivs
            

            }
        
        public function login(){
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
                //condicionar l'inci si l'usuari està ocult

                if(password_verify($pass, $pass_db) && $login == $email_db){

                    header("Location: Home/index.php");
                    die();

                }
    
            }
                else{
                    header("Location: Login/index.html");
                    die();
                }
            
                $conn -> close();
            }
            
            else{
                //redirecció al login al introduir credencials incorrectes
                header("Location: Login/index.html");
                die();
            }

        }
        
        public function changePass(){
            
            $currentUser = //id usuari actual
            $sql = "SELECT email FROM Usuaris WHERE id_user='$currentUser'";
            $emailUser = mysqli_query($conn, $sql);

            if($_POST['emailOG']== $emailUser && $_POST['emailNew'] == $_POST['emailNewConf'] ){
                
            }

            }

        public function OcultarUsuari(){
        include_once '../php_metodes/dbconn.php';
                
        
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
          
        $sql = "UPDATE Usuaris SET Ocult=1 WHERE id=1";
          
        if (mysqli_query($conn, $sql)) {
            echo "updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
          
        mysqli_close($conn);
        }
    }




?>