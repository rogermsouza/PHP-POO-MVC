<?php
    require_once 'ConexaoBD.php';
    //$bd = new ConexaoBD("localhost", "sistemaERP", "root", "");
    class ClienteModel{
        
        private $conexao;
        public function __construct($bd){
            $this->conexao = $bd;
        }

        

        public function obterClientes(){
            return $this->conexao->executaSQL("SELECT * from clientes");
        }

        public function obterClientePorID($codigo){
            return $this->conexao->executaSQL("SELECT * from clientes WHERE codigo = $codigo");
        }


        public function inserirCliente($codigo, $nome, $telefone){
            $comandoSQL = "INSERT into clientes(codigo, nome, telefone) values('$codigo', '$nome', '$telefone')";
            return $this->conexao->executaComando($comandoSQL);
        }
        public function alterarCliente($codigo, $nome, $telefone){
            $comandoSQL = "UPDATE clientes set codigo= '$codigo', nome= '$nome', telefone= '$telefone'";
            return $this->conexao->executaComando($comandoSQL);
        }
        public function excluirCliente($codigo){
            $comandoSQL = "DELETE from clientes where codigo = $codigo";
            return $this->conexao->executaComando($comandoSQL);
        }  
    }


?>