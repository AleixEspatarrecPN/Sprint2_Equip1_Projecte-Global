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

    }

    public function mostrarEmp( ){
        
    }

    public function updateEmp( ){
        
    }

    public function deleteEmp( ){
        
    }

    

}
?>