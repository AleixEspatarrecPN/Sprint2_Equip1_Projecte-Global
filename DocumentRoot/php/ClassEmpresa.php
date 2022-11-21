<?php
include_once('dbconn.php');

class Empresa {
    # Attributes
    private $id;
    private $nom;
    private $email;
    private $telefon;
    private $CIF;
    private $hidden;


    # Constructor
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

    function __construct0()
    {
        $this->__construct1("Anónimo");
    }

    function __construct1($email)
    {
        $this->email = $email;
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

    #Preparació de les funcions
    public function createEmp( ){

        //INSERT INTO `companies` (`id_company`, `name_company`, `email`, `phone_number`, `cif`, `hidden`) VALUES ('1', 'Disi', 'disi@gmail.com', '977554110', '42080', NULL);
    
    }

    // public function LlistarEmp( ){
    //     include 'dbconn.php';
    //     //aquesta funció revisarà si hi ha canvis i en cas afirmatiu aplicarà els canivs
    //    // session_start();

    //     $conn = conn();
    //     //Consulta a la base de dades
    //     $sql = "SELECT * FROM `companies`";
    //     $result = mysqli_query($conn, $sql);

    //     return $result;
    // }

    public static function llistatEmp()
    {
        include_once 'dbconn.php';
        //aquesta funció revisarà si hi ha canvis i en cas afirmatiu aplicarà els canivs
        // session_start();

        $conn = conn();
        //Consulta a la base de dades
        $sql = "SELECT * FROM `companies` WHERE companies.hidden IS NULL";
        $result = mysqli_query($conn, $sql);

        return $result;

    }

    public static function llistatEmpUnhabilited()
    {
        include_once 'dbconn.php';
        //aquesta funció revisarà si hi ha canvis i en cas afirmatiu aplicarà els canivs
        // session_start();

        $conn = conn();
        //Consulta a la base de dades
        $sql = "SELECT * FROM `companies` WHERE companies.hidden IS NOT NULL ORDER BY companies.hidden DESC ;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }

    public function unhabiliteEmp($id_emp)
    {
        include_once 'dbconn.php';
        $discharge_date = date("Y-n-j");

        $conn = conn();

        $query = "UPDATE companies SET  hidden='$discharge_date'  WHERE  id_company ='$id_emp'";
        $query_run = mysqli_query($conn, $query);

        header('Location:./index.php');
        die();
    }

    public function habiliteEmp($id_emp)
    {
        include_once 'dbconn.php';
        $conn = conn();

        $query = "UPDATE companies SET  hidden=NULL  WHERE  id_company ='$id_emp'";
        $query_run = mysqli_query($conn, $query);

        header('Location:./index.php');
        die();
    }

    public function updateEmp( ){
    //     include_once 'dbconn.php';

    //     $conn = conn();
    //     // Check connection
    //     if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    //     }
          
          
    //     if (mysqli_query($conn, $sql)) {
    //         echo "updated successfully";
    //     } else {
    //         echo "Error updating record: " . mysqli_error($conn);
    //     }
    //     mysqli_close($conn);
               
    // }

    // public function deleteEmp( ){
    //     $sql = "UPDATE `users` SET `hidden` = '2022-11-15' WHERE `users`.`id_user` = 1";

    }

    

}
?>