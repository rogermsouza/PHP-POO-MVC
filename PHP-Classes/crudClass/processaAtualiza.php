<?php
    session_start();
    require_once('ConexaoBD.php');

    if (isset($_POST['atualizar'])) {
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];

        $conBD = new ConexaoBD("localhost", "sistemaERP", "root", "");
        $comandoUpdate = "UPDATE clientes SET codigo = '$codigo', nome='$nome', telefone='$telefone' WHERE codigo = $codigo";

        if ($conBD->executaComando($comandoUpdate) == true) {
            $_SESSION['msg'] = "<span class='avisoCadastrado'>Cliente Atualizado com sucesso !!<span>";
        }
        else {
            $_SESSION['msg'] = "<span class='avisoErro'>Erro ao Atualizar cliente.<span>";
            echo "";
        }      
    }
    header('Location: index.php');
    die();

?>

<a href="indexcliente.php"> Voltar </a>