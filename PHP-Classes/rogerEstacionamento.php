<?php

    class Carro{
        private $marca;
        private $placa;
        private $modelo;
        private $cor;

        function __construct($marca, $placa, $modelo, $cor)
        {
            $this->marca = $marca;
            $this->placa = $placa;
            $this->modelo = $modelo;
            $this->cor = $cor;
        }

        function setMarca($marca){  // Recebe a marca por parametro e atribui o valor na varável
            $this->marca = $marca;
        }
        function getMarca(){ // Retorna a variável
            return $this->marca;
        }

        function setPlaca($placa){
            $this->placa = $placa;
        }
        function getPlaca(){
            return $this->placa;
        }

        function setmodelo($modelo){
            $this->modelo = $modelo;
        }
        function getModelo(){
            return $this->modelo;
        }

        function setCor($cor){
            $this->cor = $cor;
        }
        function getCor(){
            return $this->cor;
        }

        /*function insertCarro($marca, $placa, $modelo, $cor){
            $cadastra = new Carro($marca, $placa, $modelo, $cor);
        }*/
   
    }


    class Estacionamento{
        private $vaga;

        function __construct($placa){
            $this->vaga = $placa;
        }

        function setVaga($placa){
            $this->vaga = $placa;
        }
        function getVaga(){
            return $this->vaga;
        }

        // Método de saída
        function saidaCarro(){
            $this->vaga = null;
            return "vaga livre.";
        }
    }    

    $carro1 = new Carro("gm", "cpf123", "corsa", "azul");
    $vaga1 = new Estacionamento("cpf123");

    echo "Entrada: " . $carro1->getPlaca();

    echo "<br>---------registrando saída---------<br>";
    echo "Saída: " .$carro1->getPlaca() ." - saiu - " . $vaga1->saidaCarro();
    


?>