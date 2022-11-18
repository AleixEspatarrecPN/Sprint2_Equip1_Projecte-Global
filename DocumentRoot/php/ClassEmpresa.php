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

    #Preparació de les funcions
    public function createEmp( ){

        INSERT INTO `companies` (`id_company`, `name_company`, `email`, `phone_number`, `cif`, `hidden`) VALUES ('1', 'Disi', 'disi@gmail.com', '977554110', '42080', NULL);
    
    }

    public function LlistarEmp( ){
        include 'dbconn.php';
        //aquesta funció revisarà si hi ha canvis i en cas afirmatiu aplicarà els canivs
       // session_start();

        $conn = conn();
        //Consulta a la base de dades
        $sql = "SELECT * FROM `companies`";
        $result = mysqli_query($conn, $sql);

        return $result;
    }

    public function updateEmp( ){
        include_once 'dbconn.php';

        $conn = conn();
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
          
          
        if (mysqli_query($conn, $sql)) {
            echo "updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
               
    }

    public function deleteEmp( ){
        $sql = "UPDATE `users` SET `hidden` = '2022-11-15' WHERE `users`.`id_user` = 1";

    }

    

}
?>