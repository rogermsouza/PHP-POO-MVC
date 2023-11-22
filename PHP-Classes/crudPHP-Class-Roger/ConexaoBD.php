<?php

class ConexaoBD {
    private $conexao;

    function __construct($host, $dbname, $username, $password) {
        try {
            // criar a conexão com o banco/host
            $this->conexao = new PDO("mysql:host={$host};dbname={$dbname}",$username, $password);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            die( "Erro ao conectar com o banco de dados: ".$e->getMessage() );
        }
    }

    // serva para select
    public function executaSQL($comandoSQL) {
        try {
            $acesso = $this->conexao->query($comandoSQL);
            $resultados = $acesso->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        }
        catch (PDOException $e) {
            die( "Erro ao executar a consulta (select): ".$e->getMessage() );
        }
    }

    // serve para insert, update e delete
    public function executaComando($comandoSQL) {
        try {
            $acesso = $this->conexao->prepare($comandoSQL);
            $acesso->execute();
            return true;
        }
        catch (PDOException $e) {
            die("Erro ao executar o comando SQL: ".$e->getMessage() );
        }
        // return true ou false
    }
}
?>

