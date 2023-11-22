<?php
    require_once 'ConexaoBD.php';
    //$bd = new ConexaoBD("localhost", "sistemaERP", "root", "");
    class ComputadorModel{
        
        private $conexao;
        public function __construct($bd){
            $this->conexao = $bd;
        }

        

        public function obterComputador(){
            return $this->conexao->executaSQL("SELECT * from computadores");
        }

        public function obterComputadorPorID($com_cod){
            return $this->conexao->executaSQL("SELECT * from computadores WHERE com_cod = $com_cod");
        }


        public function inserirComputador($com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios){
            $comandoSQL = "INSERT into computadores(com_descricao, com_fabricante, com_numeroserie, com_acessorios) values('$com_descricao', '$com_fabricante', '$com_numeroserie', '$com_acessorios')";
            return $this->conexao->executaComando($comandoSQL);
        }
        public function alterarComputador($com_cod, $com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios){
            $comandoSQL = "UPDATE computadores set com_cod= '$com_cod', com_descricao= '$com_descricao', com_fabricante= '$com_fabricante', com_numeroserie='$com_numeroserie', com_acessorios= '$com_acessorios' WHERE com_cod = $com_cod";
            return $this->conexao->executaComando($comandoSQL);
        }
        public function excluirComputador($com_cod){
            $comandoSQL = "DELETE from computadores where com_cod = $com_cod";
            return $this->conexao->executaComando($comandoSQL);
        }  
    }


?>