<?php
    session_start();
    require_once('ConexaoBD.php');

    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];

        $conBD = new ConexaoBD("localhost", "sistemaERP", "root", "");
        $comandoDelete = "DELETE FROM clientes WHERE codigo = $codigo";

        if ($conBD->executaComando($comandoDelete) == true) {
            $_SESSION['msg'] = "<span class='avisoExcluido'>Cliente excluido com sucesso !!</span>";
        }
        else {
            $_SESSION['msg'] = "Erro ao excluir o cliente !!";
        }      
    }
    header('Location: indexcliente.php');
    die();

?>

<a href="indexcliente.php"> Voltar </a>