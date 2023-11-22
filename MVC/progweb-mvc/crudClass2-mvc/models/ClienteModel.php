<?php
    require_once('../ConexaoBD.php');
    class ClienteModel{
        private $conexao;
        public function __construct($bd){
            $this->conexao = $bd;
        }

        public function obterClientes(){
            return $this->conexao->executaSQL("SELECT * from clientes");
        }

        public function obterClientePorID($id){
            return $this->conexao->executaSQL("SELECT * from clientes WHERE id = $id");
        }


        public function inserirCliente($id, $nome, $telefone){
            $comandoSQL = "INSERT into clientes(id, nome, telefone) values('$id', '$nome', '$telefone')";
            return $this->conexao->executaComando($comandoSQL);
        }
        public function alterarCliente($id, $nome, $telefone){
            $comandoSQL = "UPDATE clientes set id= '$id', nome= '$nome', telefone= '$telefone'";
            return $this->conexao->executaComando($comandoSQL);
        }
        public function excluirCliente($id){
            $comandoSQL = "DELETE from clientes where id = $id";
            return $this->conexao->excutaComando($comandoSQL);
        }  
    }


?>