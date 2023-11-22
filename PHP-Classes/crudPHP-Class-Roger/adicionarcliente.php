<?php
    session_start();
    require_once('ConexaoBD.php');

    if (isset($_POST['adicionar'])) {
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];

        $conBD = new ConexaoBD("localhost", "sistemaERP", "root", "");
        $comandoInsert = "Insert into clientes values ($codigo, '$nome', '$telefone')";

        if ($conBD->executaComando($comandoInsert) == true) {
            $_SESSION['msg'] = "<span class='avisoCadastrado'>Cliente adicionado com sucesso !!<span>";
        }
        else {
            echo "Erro ao adicionar cliente.";
        }      
    }
    header('Location: indexcliente.php');
    die();

?>

<a href="indexcliente.php"> Voltar </a>