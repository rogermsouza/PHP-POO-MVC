<?php

    session_start();
    require_once("models/ClienteModel.php");
    require_once("controllers/clienteController.php");
    require_once("inc/elementos.php");
    require_once("bd/ConexaoBD.php");

    $bd = new ConexaoBD('localhost', 'sistemaERP', 'root', '');
    $conModel = new ClienteModel($bd);
    $controller = new ClienteController($conModel);

    if (isset($_GET['codigo']) && is_numeric($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
    } else {
        $codigo = null;
    }

    if (isset($_GET['acao']) && is_string($_GET['acao'])) {
        $acao = $_GET['acao'];
    } else {
        $acao = null;
    }


    if($acao == null){
        $controller->listarClientes();
    }elseif($acao == "excluir"){
        $controller->exClientes($codigo);
    }
    

?>