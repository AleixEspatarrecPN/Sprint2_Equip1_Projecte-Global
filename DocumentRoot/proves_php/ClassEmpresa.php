<?php
class Class_Empresa {
    # Attributes
    private $id;
    private $nom;
    private $email;
    private $telefon;
    private $CIF;

    # Constructor
    function __construct($id, $nom, $email, $telefon, $CIF) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->CIF = $CIF;
    }

    # Getters
    function getId() { return $this->id; }
    function getNom() { return $this->nom; }
    function getEmail() { return $this->email; }
    function getTelefon() { return $this->telefon; }
    function getCIF() { return $this->CIF; }

    # Setters
    function setId($id) { $this->id = $id;}
    function setNom($nom) { $this->nom = $nom; }
    function setEmail($email) { $this->email = $email; }
    function setTelefon($telefon) { $this->telefon = $telefon; }
    function setCIF($CIF) { $this->CIF = $CIF; }

       //PARTE JULIA
       public function OcultarUsuari(){
        include_once 'dbconn.php';

        $conn = conn();
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
          
        $sql = "UPDATE `users` SET `hidden` = '2022-11-15' WHERE `users`.`id_user` = 1";
          
        if (mysqli_query($conn, $sql)) {
            echo "updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
        
        }
        
        public function MostrarEmpresa(){
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

        public function CrearUsuari1($usuari, $email, $pass, $typeUsr, $id, $dni, $nom, $cognom, $telefon, $idEmpresa, $ocult){
            include_once 'dbconn.php';
    
            $conn = conn();
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    
            }

            //Transformar de 0 o 1 a sí

            $sql =  "INSERT INTO `users` (`id_user`, `dni`, `name_user`, `last_name`, `phone_number`, `email`, `emblems`, `nick_name`, `password`, `hidden`, `id_company`, `type_user`) VALUES ('$id', '$email', '$nom', '$cognom', '$telefon',  '$email', NULL, '$usuari', '$pass', '0', '$idEmpresa', '$typeUsr')";
              
            if (mysqli_query($conn, $sql)) {
                echo "Added successfully";
            } else {
                echo "<a id='error'>Error updating record: " . mysqli_error($conn); 
            }
            mysqli_close($conn);
            
            }

            public function CrearUsuari2(){
                if(isset($_POST['enviar'])) { 
                    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '') { 
                        echo 'Por favor llene todos los campos.'; 
                    } else { 
                        $sql = 'SELECT * FROM Users'; 
                        $rec = mysql_query($sql); 
                        $verificar_usuario = 0; 
                        while($result = mysql_fetch_object($rec)) { 
                            if($result->usuario == $_POST['usuario']) { 
                                $verificar_usuario = 1; 
                            } 
                        } 
                        if($verificar_usuario) { 
                            if($_POST['password'] == $_POST['repassword']) { 
                                $usuario = $_POST['usuario']; 
                                $password = $_POST['password']; 
                                $sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')"; 
                                mysql_query($sql); 
                                echo 'Usted se ha registrado correctamente.'; 
                            } else { 
                                echo 'Las claves no son iguales, intente nuevamente.'; 
                            } 
                        } else {
                           echo 'Este usuario ya ha sido registrado anteriormente.'; 
                            } 
                        } 
                    }     
                }
        }
?>
}
?>