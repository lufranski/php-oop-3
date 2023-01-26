<?php
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

            return '<br>' . 'Impiegato: ' . parent :: getHtml() . ' ' . $this -> getHiringDate()
                    . ' Stipendio: ' . $this -> getSalaryForYear() . ' euro';
        }

    }
?>