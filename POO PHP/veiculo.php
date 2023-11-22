<!-- Exercício veículo -->

<?php
    class Veiculo {
        private $tanque;
        private $consumo;

        public function __construct($consumo)
        {
            $this->tanque = 0;
            $this->consumo = $consumo;
        }

        public function getTanque(){
            return $this->tanque;
        }
        public function setTanque($tanque){
            
            $this->tanque += $tanque;
            

        }

        public function getConsumo(){
            return $this->consumo;
        }
        public function setConsumo($consumo){
            $this->consumo = $consumo;
        }

        public function andar($d){
            $litros = $d / $this->consumo;
            $this-> tanque -= $litros;
            return $this->tanque;
        }

      
    
    }

$automovel = new Veiculo(5);
$automovel->setTanque(100);
echo $automovel->getTanque();
echo "<br>";
echo $automovel->andar(50);
echo "<br>";



?>