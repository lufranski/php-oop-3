<?php
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

            return '<br>' . 'Boss: ' . parent :: getHtml()
            . ' Stipendio: ' . $this -> getBossSalary() . ' euro';
        }
    }
?>