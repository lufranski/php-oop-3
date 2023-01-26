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
        private Stipendio $stipendio;

        public function __construct($nome,$cognome,$dataDiNascita,$luogoDiNascita,$codiceFiscale, $dataDiAssunzione, Stipendio $stipendio){

            parent :: __construct($nome,$cognome,$dataDiNascita,$luogoDiNascita,$codiceFiscale, $dataDiAssunzione);

            $this -> setHiringDate($dataDiAssunzione);
            $this -> setSalary($stipendio);
        }

        public function getHiringDate(){

            return $this -> dataDiAssunzione;
        }
        public function setHiringDate($dataDiAssunzione){

            $this -> dataDiAssunzione = $dataDiAssunzione;
        }
        
        public function getSalary(){

            return $this -> stipendio;
        }
        public function setSalary($stipendio){

            $this -> stipendio = $stipendio;
        }

        public function getSalaryForYear(){

            return $this -> stipendio -> salaryCalc();
        }

        public function getHtml(){

            return '<br>' . parent :: getHtml() . ' ' . $this -> getHiringDate()
                    . ' Stipendio: ' . $this -> getSalaryForYear() . ' euro';
        }

    }

    class Capo extends Persona {

        private $dividendo;
        private $bonus;

        public function __construct($nome,$cognome,$dataDiNascita,$luogoDiNascita,$codiceFiscale,$dividendo,$bonus){

            parent :: __construct($nome,$cognome,$dataDiNascita,$luogoDiNascita,$codiceFiscale, $dataDiAssunzione);
            
            $this -> setDividendo($dividendo);
            $this -> setBonus($bonus);
        }

        public function getDividendo(){

            return $this -> dividendo;
        }
        public function setDividendo($dividendo){

            $this -> dividendo = $dividendo;
        }

        public function getBonus(){

            return $this -> bonus;
        }
        public function setBonus($bonus){

            $this -> bonus = $bonus;
        }

        public function getBossSalary(){

            return ($this -> getDividendo() * 12) + $this -> getBonus();
        }

        public function getHtml(){

            return '<br>' . parent :: getHtml()
            . ' Stipendio: ' . $this -> getBossSalary() . ' euro';
        }
    }

    class Stipendio {

        private $mensile;
        private $tredicesima; //Boolean
        private $quattordicesima; //Boolean

        public function __construct ($mensile, $tredicesima, $quattordicesima){

            $this -> setMensile($mensile);
            $this -> setTredicesima($tredicesima); 
            $this -> setQuattordicesima($quattordicesima); 
        }

        public function getMensile(){

            return $this -> mensile;
        }
        public function setMensile($mensile){

            $this -> mensile = $mensile;
        }

        public function getTredicesima(){

            return $this -> tredicesima;
        }
        public function setTredicesima($tredicesima){

            $this -> tredicesima = $tredicesima;
        }

        public function getQuattordicesima(){

            return $this -> quattordicesima;
        }
        public function setQuattordicesima($quattordicesima){

            $this -> quattordicesima = $quattordicesima;
        }

        public function salaryCalc(){

            return (($this -> getMensile() * 12) + $this -> getTredicesima()) + $this -> getQuattordicesima(); 
        }

        public function getHtml(){

            return $this -> salaryCalc();
        }
    }

    $stipendio = new Stipendio(1000, 1000, 1000);
    $persona = new Persona ('Mario', 'Rossi', '12-01-1990', 'Busto Arsizio', 'MRRSS29A90C352I');
    $impiegato = new Impiegato ('Franco', 'Lerda', '13-02-1984', 'Modena', 'FRCLRD45A86C352J', '12-06-99', $stipendio);
    $capo = new Capo ('Mimmo', 'Berardi', '22-07-1994', 'Corigliano Calabro', 'DMCBRD94A04C352I', 10000, 5000);

    echo $persona -> getHtml();
    echo $impiegato -> getHtml();
    echo $capo -> getHtml();
?>
