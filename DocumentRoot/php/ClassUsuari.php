<?php
include_once('dbconn.php');

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

        #Creem el constructor
        function __construct()
        {
            //obtengo un array con los parámetros enviados a la función
            $params = func_get_args();
            //saco el número de parámetros que estoy recibiendo
            $num_params = func_num_args();
            //cada constructor de un número dado de parámtros tendrá un nombre de función
            //atendiendo al siguiente modelo __construct1() __construct2()...
            $funcion_constructor ='__construct'.$num_params;
            //compruebo si hay un constructor con ese número de parámetros
            if (method_exists($this,$funcion_constructor)) {
                //si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
                call_user_func_array(array($this,$funcion_constructor),$params);
            }
        }

        //ahora declaro una serie de métodos constructores que aceptan diversos números de parámetros
        function __construct0()
        {
            $this->__construct1("Anónimo");
        }

        function __construct1($email)
        {
            $this->email = $email;
        }

        function __construct8($dni,$nom,$cognom,$telefon,$email,$nomUsuari,$passUsuari,$tipusUsuari)
        {
            $this->dni = $dni;
            $this->nom = $nom;
            $this->cognom = $cognom;
            $this->telefon = $telefon;
            $this->email = $email;
            $this->nomUsuari = $nomUsuari;
            $this->passUsuari = $passUsuari;
            $this->tipusUsuari = $tipusUsuari;
        }

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
            $this->dni = $dni;
            $this->nom = $nom;
            $this->cognom = $cognom;
            $this->telefon = $telefon;
            $this->email = $email;
            $this->insignies = $insignies;
            $this->nomUsuari = $nomusuari;
            $this->tipusUsuari = $tipusUsuari;
            $this->idEmpresa = $idEmpresa;

            }

            //PARTE DE JAN
            public function mostrarUsr(){
            include_once 'dbconn.php';
            $conn = conn();
            $query = "SELECT * FROM users WHERE email = '$this->email'";
            $result = mysqli_query($conn,$query) or trigger_error("Consulta SQL fallida!: $query - Error: " . mysqli_error($conn), E_USER_ERROR);
            $row = $result -> fetch_assoc();

                echo '<div  class=" d-flex align-items-start flex-column">',
                        '<span class="p-lg-3" >Nom:</span>',
                        '<span class="p-lg-3">Cognoms:</span>',
                        '<span class="p-lg-3">DNI:</span>',
                        '<span class="p-lg-3">Empresa: </span>',
                    '</div>';
                echo '<div class=" d-flex align-items-start flex-column">',
                        '<span class="p-lg-3" id="name">' . $row['name_user'] . '</span>',
                        '<span class="p-lg-3" id="last-name">' . $row['last_name'] . '</span>',
                        '<span class="p-lg-3" id="dni">' . $row['dni'] . '</span>',
                        '<span class="p-lg-3" id="empresa">' . $row['id_company'] . '</span>',
                    '</div>';

                echo '<div class="vr"></div>';

                echo '<div class=" d-flex align-items-start flex-column">',
                            '<span class="p-lg-3">Nom de usuari:</span>',
                            '<span class="p-lg-3">Correu electrònic:</span>',
                            '<span class="p-lg-3">Telèfon:</span>',
                    '</div>';
                echo '<div class=" d-flex align-items-start flex-column">',
                            '<span class="p-lg-3" name="username" id="username">' . $row['nick_name'] . '</span>',
                            '<span class="p-lg-3"  name="email" id="email">' . $row['email'] . '</span>',
                            '<span class="p-lg-3" type="text" name="phone" id="phone">' . $row['phone_number'] . '</span>',
                    '</div>';    
        }
    

        //PARTE DE ALEIX
        public function login($login, $pass){
            include_once 'dbconn.php';


            session_start();

            //comprovació entrada de dades.
            if (isset ($login) && isset($pass)) {

            //utilització de la funció password_hash per a encriptar la contrasenya.
            //$cryptPass = password_hash($pass, PASSWORD_BCRYPT); 

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
                    //password_verify($pass, $pass_db)
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

        //PARTE DE ALEIX
        public function logout()
        {
            //buidem les dades de la sessió previament a la seva destrucció
            session_unset();
            session_destroy();

            header('Location: /html/login/index.php');
            die();

        }

        //PARTE ALEIX
        public function changePass($passOld, $passNew, $passNewConf){

            if (strlen($passNew)>8 || strlen($passNew)<20){
                if (preg_match('~[0-9]+~', $passNew)){
                    if (preg_match('/[\'^£$%&*().}{@#~?><>,|=_+¬-]/', $passNew)){
                        if(preg_match('/[A-Z]/', $passNew)){

                            //$currentUser = $_SESSION["idUSR"];
                            $currentUser = 3;

                            $sql = "SELECT `password` FROM users WHERE id_user='$currentUser'";
                
                            $conn = conn();
                
                            $passUser = mysqli_query($conn, $sql);

                            if ($passUser -> num_rows > 0){

                                $row = $passUser -> fetch_assoc();
                                $passOG = $row["password"];
                
                
                            //desencriptar la contrassenya
                
                            if($passOld == $passOG){
                
                                if($passNew == $passNewConf && $passNew != $passUser){
                
                                    //encriptar contrassenya
                
                                    $sqlPass = "UPDATE users SET `password` = '$passNew' WHERE id_user = '$currentUser'";
                
                                    if (mysqli_query($conn, $sqlPass)) {
                                        header("Location: ../infoPerfil/perfil.php");
                                         die();
                                        
                                        die();
                                    } else {
                                        echo "Error updating record: ";
                                        die();
                                    }
                                }
                                else{
                                    echo 'Les contrassenyes no coincideixen2';
                                    die();
                                }   
                            }
                            else{
                                echo $passOG ;
                                die();
                        }
                
                            $conn->close();
                        }

                        }
                        else{
                            return ("La contrassenya ha d'incloure com a mínim una majuscula.");
                        }
                    }
                    else{
                        return ("La contrassenya ha de contenir com a  mínim un caracter especial valid.");
                    }
                }
                else{
                    return ("La contrassenya com a mínim ha de tenir un numero.");
                }

            }
            else{
                return ("La contrassenya ha de contenir entre 8 i 20 cracters.");
            }
            }


        public function MostrarUsuari(){
            include_once 'dbconn.php';
    
            $conn = conn();
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
              
            $sql = "UPDATE `users` SET `hidden` = NULL WHERE `users`.`id_user` = 1";
              
            if (mysqli_query($conn, $sql)) {
                echo "updated successfully";
            } else {
                echo "<a id='error'>Error updating record: " . mysqli_error($conn); 
            }
            mysqli_close($conn);
            
            }




        public static function llistatUsr()
        {
            include_once 'dbconn.php';

            $conn = conn();
            //Consulta a la base de dades
            $sql = "SELECT * FROM `users` WHERE users.hidden IS NULL";
            $result = mysqli_query($conn, $sql);

            return $result;

        }

        public static function llistatUsrUnhabilited()
        {
            include_once 'dbconn.php';

            $conn = conn();
            //Consulta a la base de dades
            $sql = "SELECT * FROM `users` WHERE users.hidden IS NOT NULL ORDER BY users.hidden DESC ;";
            $result = mysqli_query($conn, $sql);

            return $result;

        }

        public function unhabiliteUser($id_user)
        {
            include_once 'dbconn.php';
            $discharge_date = date("Y-n-j");

            $conn = conn();

            $query = "UPDATE users SET  hidden='$discharge_date'  WHERE id_user='$id_user'";
            $query_run = mysqli_query($conn, $query);

            header('Location:./index.php');
            die();
        }

        public function habiliteUser($id_user)
        {
            include_once 'dbconn.php';
            $conn = conn();

            $query = "UPDATE users SET  hidden=NULL  WHERE id_user='$id_user'";
            $query_run = mysqli_query($conn, $query);

            header('Location:./index.php');
            die();
        }

        public function updateUser($id_user, $name_user, $last_name, $email, $phone_number, $nick_name)
        {

            include_once 'dbconn.php';
            $conn = conn();

            $query = "UPDATE users SET name_user='$name_user', last_name='$last_name', email='$email', phone_number=' $phone_number', nick_name='$nick_name'  WHERE id_user='$id_user'  ";
            $query_run = mysqli_query($conn, $query);

            header('Location:./index.php');
        }

        public function createUser($dni, $name_user, $last_name, $phone_number, $email, $nick_name, $password, $type_user){
            include_once 'dbconn.php';

            $conn = conn();
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            //Transformar de 0 o 1 a sí

            $sql =  "INSERT INTO `users` (`dni`, `name_user`, `last_name`, `phone_number`, `email`, `nick_name`, `password`, `hidden`, `id_company`, `type_user`) 
                VALUES ('$dni', '$name_user', '$last_name', '$phone_number', '$email', '$nick_name', '$password', NULL, NULL, '$type_user')";

            if (mysqli_query($conn, $sql)) {
                header('Location: /html/llistatUsuaris/index.php');

            } else {
                echo "<a id='error'>Error updating record: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }




    }




?>