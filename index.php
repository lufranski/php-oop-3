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

            return $this -> cognome;
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

            return $this -> getFullName() . ' ' . $this -> getBirthDate() . ' ' . $this -> getBirthPlace() . ' ' . $this -> getFiscalCode(); 
        }
    }

    class Impiegato extends Persona {

        private $dataDiAssunzione;

        public function __construct($nome,$cognome,$dataDiNascita,$luogoDiNascita,$codiceFiscale, $dataDiAssunzione){

            parent :: __construct($nome,$cognome,$dataDiNascita,$luogoDiNascita,$codiceFiscale, $dataDiAssunzione);

            $this -> setHiringDate($dataDiAssunzione);
        }

        public function getHiringDate(){

            return $this -> dataDiAssunzione;
        }
        public function setHiringDate($dataDiAssunzione){

            $this -> dataDiAssunzione = $dataDiAssunzione;
        }

        public function getHtml(){

            return '<br>' . parent :: getHtml() . ' ' . $this -> getHiringDate();
        }
    }

    $persona = new Persona ('Mario', 'Rossi', '12-01-1990', 'Busto Arsizio', 'MRRSS29A90C352I');
    $impiegato = new Impiegato ('Franco', 'Lerda', '13-02-1984', 'Modena', 'FRCLRD45A86C352J', '12-06-99');

    echo $persona -> getHtml();
    echo $impiegato -> getHtml();
?>
