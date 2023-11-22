<?php

    class Calculadora{
        private $resultado;
        private $memoria;

        public function __construct(){
            $this->resultado = 0;
            $this->memoria = 0;
        
        }

        public function getRes(){
            return $this->resultado;
        }
        public function somar($n){
            $this->memoria = $this->resultado;
            $this->resultado += $n;
        }
        public function subtrai($n){
            $this->resultado -= $n;
        }
        public function multiplica($n){
            $this->resultado *= $n;
        }
        public function divide($n){
            $this->resultado /= $n;
        }

        public function getMemoria(){
            $this->memoria = $this->resultado;
        }
        public function getDesfaz(){
            $this->resultado = $this->memoria;
        }
    }

$minhaCalculadora = new Calculadora();
$minhaCalculadora->somar(50);

echo $minhaCalculadora->getRes();

$minhaCalculadora->multiplica(20);
echo "<br> = ". $minhaCalculadora->getRes();
?>