<?php
    // Persona IS-A Impiegato
    //             IS-A Capo
    // Impiegato HAS-A Stipendio
    // Capo HAS-A Stipendio 

    class Persona {

        private $nome;
        private $cognome;
        private $dataDiNascita;
        private $luogoDiNascita;
        private $codiceFiscale;

        public function __construct($nome,$cognome,$dataDiNascita,$luogoDiNascita,$codiceFiscale){

            $this -> setName($nome);
            $this -> setLastname($cognome);
            $this -> setBirthDate($dataDiNascita);
            $this -> setBirthPlace($luogoDiNascita);
            $this -> setFiscalCode($codiceFiscale);
        }

        public function getName(){

            return $this -> nome;
        }
        public function setName($nome){

            $this -> nome = $nome;
        }

        public function getLastname(){

            return $this -> $cognome;
        }
        public function setLastname($cognome){

            $this -> cognome = $cognome;
        }

        public function getBirthDate(){

            return $this -> dataDiNascita;
        }
        public function setBirthDate($dataDiNascita){

            $this -> dataDiNascita = $dataDiNascita;
        }

        public function getBirthPlace(){

            return $this -> luogoDiNascita;
        }
        public function setBirthPlace($luogoDiNascita){

            $this -> luogoDiNascita = $luogoDiNascita;
        }

        public function getFiscalCode(){

            return $this -> codiceFiscale;
        }
        public function setFiscalCode($codiceFiscale){

            $this -> codiceFiscale = $codiceFiscale;
        }

        public function getFullName(){

            return $this -> getName() . ' ' . $this -> getLastname();
        }

        public function getHtml(){

            return $this -> getFullName() . ' ' . $this -> getBirthDate() . ' ' . $this -> getBirthDate() . ' ' . $this -> getBirthPlace() . ' ' . $this -> getFiscalCode(); 
        }
    }

    $persona = new Persona ('Mario', 'Rossi', '12-01-1990', 'Busto Arsizio', 'MRRSS29A90C352I');

    echo $persona -> getHtml();
?>
