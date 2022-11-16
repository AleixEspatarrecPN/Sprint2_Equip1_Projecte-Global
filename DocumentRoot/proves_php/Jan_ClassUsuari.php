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

        
    }
?>

<?php
  if(isset($_COOKIE['contador']))
  { 
    // Caduca en un año 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 
  } 
  else 
  { 
    // Caduca en un año 
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Bienvenido a nuestra página web'; 
  } 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Prueba de cookie</title> 
</head> 
<body> 
<p> 
<?php echo $mensaje; ?> 
</p> 
</body> 
</html> 

<?php 
  session_start(); 
  if(isset($_SESSION['contador'])) 
  { 
    $_SESSION['contador'] = $_SESSION['contador'] + 1; 
    $mensaje = 'Número de visitas: ' . $_SESSION['contador']; 
  } 
  else 
  { 
    $_SESSION['contador'] = 1; 
    $mensaje = 'Bienvenido a nuestra página web'; 
  } 
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">  
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Prueba de cookie</title> 
</head> 
<body> 
<p> 
<?php echo $mensaje; ?> 
</p> 
</body> 
</html>
