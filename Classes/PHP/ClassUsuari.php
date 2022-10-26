<?php

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

        #Creem el constructor
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