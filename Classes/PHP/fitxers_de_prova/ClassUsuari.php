<?php

class Usuari{
    #Preparació dels atributs
    private $id;
    private $dni;
    private $nom;
    private $cognom;
    private $telefon;
    private $email;
    private $insignies;
    private $Nomusuaris;
    private $PassUsuari;
    private $TipusUsuari;
    private $IdEmpresa;

    #Preparació del constructor
    public function __construct($id, $dni, $nom, $cognom, $telefon, $email, $insignies, $Nomusuaris,$TipusUsuari, $IdEmpresa ){
    $this -> id = $id;
    $this -> DNI = $dni;
    $this -> nom = $nom;
    $this -> cognom = $cognom;
    $this -> email = $email;
    $this -> insignies = $insignies;
    $this -> NomUsuaris = $Nomusuaris;
    $this -> TipusUsuari = $TipusUsuari; 
    $this -> idEmpresa = $IdEmpresa;

    }

    #Preparació dels gets
    public function getId(){
        return $this -> id;
    }
    public function getdni(){
        return $this -> DNI;
    }
    public function getNom(){
        return $this -> Nom;
    }
    public function getCognom(){
        return $this -> Cognom;
    }
    public function getEmail(){
        return $this -> Email;
    }
    public function getInsignies(){
        return $this -> Insignies;
    }
    public function getNomUsuaris(){
        return $this -> NomUsuaris;
    }
    public function getTipusUsuari(){
        return $this -> TipusUsuaris;
    }
    public function getIdEmpresa(){
        return $this -> IdEmpresa;
    }
  #Preparació dels sets
    public function setId($id){  
        $this -> id = $id; 
    }
    public function setDni($dni){  
        $this -> dni = $dni; 
    }
    public function setNom($nom){  
        $this -> nom = $nom; 
    }
    public function setCognom($cognom){  
        $this -> cognom = $cognom; 
    }
    public function setEmail($email){  
        $this -> email = $email; 
    }
    public function setInsignies($insignies){  
        $this -> insignies = $insignies; 
    }
    public function setNomUsuaris($Nomusuaris){  
        $this -> NomUsuaris = $Nomusuaris; 
    }
    public function setTipusUsuari($TipusUsuari){  
        $this -> TipusUsuari = $TipusUsuari; 
    }
    public function setIdEmpresa($IdEmpresa){  
        $this -> IdEmpresa = $IdEmpresa; 
    }
    
    #Preparació de les funcions
    public function create($id, $dni, $nom, $cognom, $telefon, $email, $insignies, $Nomusuaris,$TipusUsuari, $IdEmpresa){
        $this -> id = $id;
        $this -> DNI = $dni;
        $this -> nom = $nom;
        $this -> cognom = $cognom;
        $this -> email = $email;
        $this -> insignies = $insignies;
        $this -> NomUsuaris = $Nomusuaris;
        $this -> TipusUsuari = $TipusUsuari; 
        $this -> idEmpresa = $IdEmpresa;
    
    }
    public function mostrar($id, $dni, $nom, $cognom, $telefon, $email, $insignies, $Nomusuaris,$TipusUsuari, $IdEmpresa){
        $this -> id = $id;
        $this -> DNI = $dni;
        $this -> nom = $nom;
        $this -> cognom = $cognom;
        $this -> email = $email;
        $this -> insignies = $insignies;
        $this -> NomUsuaris = $Nomusuaris;
        $this -> TipusUsuari = $TipusUsuari; 
        $this -> idEmpresa = $IdEmpresa;
    
    }

    public function update($id, $dni, $nom, $cognom, $telefon, $email, $insignies, $Nomusuaris,$TipusUsuari, $IdEmpresa){
        $this -> id = $id;
        $this -> DNI = $dni;
        $this -> nom = $nom;
        $this -> cognom = $cognom;
        $this -> email = $email;
        $this -> insignies = $insignies;
        $this -> NomUsuaris = $Nomusuaris;
        $this -> TipusUsuari = $TipusUsuari; 
        $this -> idEmpresa = $IdEmpresa;
    
    }
    
    public function delete($id, $dni, $nom, $cognom, $telefon, $email, $insignies, $Nomusuaris,$TipusUsuari, $IdEmpresa){
        $this -> id = $id;
        $this -> DNI = $dni;
        $this -> nom = $nom;
        $this -> cognom = $cognom;
        $this -> email = $email;
        $this -> insignies = $insignies;
        $this -> NomUsuaris = $Nomusuaris;
        $this -> TipusUsuari = $TipusUsuari; 
        $this -> idEmpresa = $IdEmpresa;
    
    }
    public function sendConfirmationMail($email){
        $this -> email = $email;    
    }
}

?>