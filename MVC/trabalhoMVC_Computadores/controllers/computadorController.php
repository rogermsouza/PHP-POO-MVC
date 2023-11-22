<?php
    require_once('models/ComputadorModel.php');
    
    class ComputadorController {
        private $computadorModelo;
        function __construct(ComputadorModel $computadorModelo){
            $this->computadorModelo = $computadorModelo;
        }

        public function listarComputadores(){
            $computador = $this->computadorModelo->obterComputador();
            include 'views/computador.php';
        }


        public function addComputador($com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios){

            $computador = $this->computadorModelo->inserirComputador($com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios);
            return $_SESSION['msg'] = "Cadastro Realizado";
        }
        
        
        public function obterComputadorPorID($com_cod){
            $computador = $this->computadorModelo->obterComputadorPorID($com_cod);
            $computador = $computador[0];

            include 'views/editarComputador.php';
        }

        public function alterarComputador($com_cod, $com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios){

            $computador = $this->computadorModelo->alterarComputador($com_cod, $com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios);
            return $_SESSION['msg'] = "Cadastro Atualizado";
        }



        public function removerComputador($com_cod){

            $computador = $this->computadorModelo->excluirComputador($com_cod);
            return $_SESSION['msg'] = "Computador Excluido";

        }
}
        



?>