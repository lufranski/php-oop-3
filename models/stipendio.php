<?php
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

            $tredicesima = $this -> getTredicesima() == '1' ? $this -> getMensile() : 0;
            $quattordicesima = $this -> getQuattordicesima() == '1' ? $this -> getMensile() : 0;
            return (($this -> getMensile() * 12) + $tredicesima) + $quattordicesima ; 
        }

        public function getHtml(){

            return $this -> salaryCalc();
        }
    }
?>