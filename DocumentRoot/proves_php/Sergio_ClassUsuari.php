<?php

class User
{
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
        $funcion_constructor = '__construct' . $num_params;
        //compruebo si hay un constructor con ese número de parámetros
        if (method_exists($this, $funcion_constructor)) {
            //si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
            call_user_func_array(array($this, $funcion_constructor), $params);
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

    function __construct8($dni, $nom, $cognom, $telefon, $email, $nomUsuari, $passUsuari, $tipusUsuari)
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
    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getDNI()
    {
        return $this->dni;
    }

    function setDNI($dni)
    {
        $this->dni = $dni;
    }

    function getNom()
    {
        return $this->nom;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function getCognom()
    {
        return $this->cognom;
    }

    function setCognom($cognom)
    {
        $this->cognom = $cognom;
    }

    function getTelefon()
    {
        return $this->telefon;
    }

    function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getInsignies()
    {
        return $this->insignies;
    }

    function setInsignies($insignies)
    {
        $this->insignies = $insignies;
    }

    function getNomUsuari()
    {
        return $this->nomUsuari;
    }

    function setNomUsuari($nomUsuari)
    {
        $this->nomUsuari = $nomUsuari;
    }

    function getPassUsuari()
    {
        return $this->passUsuari;
    }

    function setPassUsuari($passUsuari)
    {
        $this->passUsuari = $passUsuari;
    }

    function getTipusUsuari()
    {
        return $this->tipusUsuari;
    }

    function setTipusUsuari($tipusUsuari)
    {
        $this->tipusUsuari = $tipusUsuari;
    }

    function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;
    }


    #Preparació de les funcions
    public function createUsr($id, $dni, $nom, $cognom, $telefon, $email, $insignies, $nomusuari, $tipusUsuari, $idEmpresa)
    {
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

    //PARTE DE SERGIO
    public static function llistatUsr()
    {
        include_once 'dbconn.php';
        //aquesta funció revisarà si hi ha canvis i en cas afirmatiu aplicarà els canivs
       // session_start();

        $conn = conn();
        //Consulta a la base de dades
        $sql = "SELECT * FROM `users` WHERE users.hidden IS NULL";
        $result = mysqli_query($conn, $sql);

        return $result;

        }

    public static function llistatUsrUnhabilited()
    {
        include_once 'dbconn.php';
        //aquesta funció revisarà si hi ha canvis i en cas afirmatiu aplicarà els canivs
        // session_start();

        $conn = conn();
        //Consulta a la base de dades
        $sql = "SELECT * FROM `users` WHERE users.hidden IS NOT NULL";
        $result = mysqli_query($conn, $sql);

        return $result;

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
