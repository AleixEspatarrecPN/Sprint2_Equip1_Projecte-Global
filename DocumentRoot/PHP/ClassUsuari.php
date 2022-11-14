<?php
include_once 'dbconn.php';

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
        function __construct() {
            
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
        public function createUsr($id, $dni, $nom, $cognom, $telefon, $email, $insignies, $Nomusuaris,$TipusUsuari, $IdEmpresa){
            $this->id = $id;
            $this->DNI = $dni;
            $this->nom = $nom;
            $this->cognom = $cognom;
            $this->email = $email;
            $this->insignies = $insignies;
            $this->NomUsuaris = $Nomusuaris;
            $this->TipusUsuari = $TipusUsuari; 
            $this->idEmpresa = $IdEmpresa;

            }

        public function mostrarUsr(){
            include_once 'dbconn.php';
            $query = "SELECT * FROM `Usuaris` WHERE `email` =  $this->email";
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

        public function updateUsr(){
            //aquesta funció revisarà si hi ha canvis i en cas afirmatiu aplicarà els canivs
            

        }
        
        public function changePass(){
            
            

            }

        public function deleteUsr(){
                
                
            }

        public function sendConfirmationMail($email){
            $this -> email = $email;    
            }
    }


?>