<?php
    require_once('../ConexaoBD');
    class UsuarioModel {
        private $conexao; // ConexaoBD

        public function __construct($bd){
            $this->conexao = $bd;
        }

        public function obterUsuarios(){
            return $this->conexao->executaSQL("SELECT * FROM usuarios");
        }

        public function obterUsuarioPorId($idUsuario){
            return $this->conexao->executaSQL("SELECT * FROM usuarios WHERE id = $idUsuario");
        }

        public function adicionarUsuario($nome, $senha, $cpf){
            $comandoSQL = "INSERT into usuarios(nome, senha, cpf) values('$nome', '$senha', '$cpf')";
            return $this->conexao->executaComando($comandoSQL);
        }

        public function alterarUsuario($idUsuario, $nome, $senha, $cpf){
            $comandoSQL = "UPDATE usuarios set nome='$nome', senha ='$senha', cpf='$cpf' where id = $idUsuario";
            return $this->conexao->executaComando($comandoSQL);
        }

        public function excluirUsuario($idUsuario){
            $comandoSQL = "DELETE FROM usuarios where id = $idUsuario";
            return $this->conexao->executaComando($comandoSQL);
        }
    }


?>