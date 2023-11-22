<?php

    class Voo {
        private $num_voo;
        private $data_voo;
        private $poltrona = array();
        public function __construct($num_voo, $dia, $mes, $ano){
            $this->num_voo = $num_voo;
            //$this->data = Data($dia, $mes, $ano);
            $this->data_voo = new DateTime("$ano-$mes-$dia");
            $this->criaPoltrona(100);
        }

        


        public function setNum_voo($num){
            $this->num_voo = $num;
        }

        public function getNum_voo(){
            return $this->num_voo;
        }

        
        public function criaPoltrona($num){
            for($i = 0; $i <100; $i++){
                $this->poltrona[$i] = 0;
            }
        }
        public function proximaPoltrona(){
            for($i = 0; $i <100; $i ++){
                if ($this->poltrona[$i] == 0){
                    return $i;
                }
            }
        }

        public function verificaPoltrona($num){
            if($this->poltrona[$num] == 0){
                return True;
            }else{
                return False;
            }
        }

        public function ocupaPoltrona($num){
            $conferePoltrona;
            if($this->poltrona[$num] == 0){
                $this->poltrona[$num] = 1;
                return "Poltrona " .$num ." Reservada";
            }else{
                return "Poltrona " .$num ." não disponível <br>";
            }

        }

        public function getVagas(){
            $contador = 0;
            for($i = 0; $i < 100; $i ++){
                if($this->poltrona[$i] == 0){
                    $contador += 1;
                }
            }
            return "Total de vagas disponíveis: " .$contador;
        }

        public function getVoo(){
            return $this->num_voo;
        }

        public function getDataVoo($dia, $mes, $ano){
            return $this->Data();
        }

    }


    $voo1 = new Voo(200, 10,05,2023);
    echo "<br>" .$voo1->ocupaPoltrona(5). "<br>";
    echo "<br>" .$voo1->ocupaPoltrona(15). "<br>";
    echo "<br>" .$voo1->ocupaPoltrona(15). "<br>";
    echo $voo1->getVagas(). "<br>";
    echo "Número do voo: " .$voo1->getVoo(). "<br>";
 
echo "";
?>