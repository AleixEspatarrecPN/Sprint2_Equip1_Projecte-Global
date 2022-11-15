<?php

    class User {
        #Propietats
        private $id;
        private $dni;
        private $nom;
        private $cognom;
        private $telefon;
        private $email;
        private $insignies;
        private $nomUsuari;
        private $passUsuari;
        private $tipusUsuari;
        private $idEmpresa;

        #Getters i Setters
        function getId() { return $this->id; }
        function setId($id) { $this->id = $id; }

        function getDNI() { return $this->dni; }
        function setDNI($dni) { $this->dni = $dni; }

        function getNom() { return $this->nom; }
        function setNom($nom) { $this->nom = $nom; }

        function getCognom() { return $this->cognom; }
        function setCognom($cognom) { $this->cognom = $cognom; }
        function getTelefon() { return $this->telefon; }
        function setTelefon($telefon) { $this->telefon = $telefon; }

        function getEmail() { return $this->email; }
        function setEmail($email) { $this->email = $email; }

        function getInsignies() { return $this->insignies; }
        function setInsignies($insignies) { $this->insignies = $insignies; }

        function getNomUsuari() { return $this->nomUsuari; }
        function setNomUsuari($nomUsuari) { $this->nomUsuari = $nomUsuari; }

        function getPassUsuari() { return $this->passUsuari; }
        function setPassUsuari($passUsuari) { $this->passUsuari = $passUsuari; }

        function getTipusUsuari() { return $this->tipusUsuari; }
        function setTipusUsuari($tipusUsuari) { $this->tipusUsuari = $tipusUsuari; }

        function getIdEmpresa() { return $this->idEmpresa; }
        function setIdEmpresa($idEmpresa) { $this->idEmpresa = $idEmpresa; }

        
        #Preparació de les funcions
        public function createUsr($id, $dni, $nom, $cognom, $telefon, $email, $insignies, $nomusuari,$tipusUsuari, $idEmpresa){
            $this->id = $id;
            $this->DNI = $dni;
            $this->nom = $nom;
            $this->cognom = $cognom;
            $this->telefon = $telefon;
            $this->email = "joanpasqualalmudeve@iesmontsia.org";
            $this->insignies = $insignies;
            $this->nomUsuari = $nomusuari;
            $this->tipusUsuari = $tipusUsuari;
            $this->idEmpresa = $idEmpresa;

            }

        //PARTE DE ALEIX
        public function login($login, $pass){
            include_once 'dbconn.php';


            session_start();

            //comprovació entrada de dades.
            if (isset ($login) && isset($pass)) {

            //utilització de la funció password_hash per a encriptar la contrasenya.
            //$cryptPass = password_hash(pass, PASSWORD_BCRYPT); 

            //es guarda a la variable global $_SESSION el correu de l'usuari.
            $_SESSION['mail_session'] = $login;

            //es guarda la consulta sql en una variable per fer la consulta.
            $sql = "SELECT id_user, email, `password`, type_user, `hidden` FROM users WHERE email='$login'";
            $conn = conn();
            $result = mysqli_query($conn, $sql);

            if ($result -> num_rows > 0){

                $row = $result -> fetch_assoc();
                $id_db = $row["id_user"];
                $email_db = $row["email"];
                $pass_db = $row["password"];
                $tipusUsr_db = $row["type_user"];
                $hidden_db = $row["hidden"];


                //guardem el tipus d'usuari a _SESSION
                $_SESSION["idUsr_session"] = $id_db;
                $_SESSION["tipusUsr_session"] = $tipusUsr_db;
                $_SESSION["ocult_session"] = $hidden_db;


                //condicionar l'inci si l'usuari està ocult
                //verificació de contrassenya quan l'encriptem:
                    //(password_verify($pass, $pass_db) && $login == $email_db)
                if($pass == $pass_db && $login == $email_db){

                    header("Location: ../home/index.php");
                    die();

                }

                else{
                    header("Location: index.php");
                    return ("<a>No s'han omplert els camps nescessaris</a>");
                    die();
                }
            
                $conn -> close();
            }
            
            else{
                //redirecció al login al introduir credencials incorrectes
                header("Location: index.php");
                return ("<a>Les crendencials introduides són incorrectes</a>");
                die();
            }
        }

    }
    public function logout()
        {
            session_start();

            //buidem les dades de la sessió previament a la seva destrucció
            session_unset();
            session_destroy();

            
            header("Location: login/index.php");
            die();

        }
}

?>