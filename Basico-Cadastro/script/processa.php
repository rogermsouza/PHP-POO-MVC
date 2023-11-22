<?php

session_start();
require "conecta.php";

function cadastrar(){
    $id = "imaGem"; // primeiro nome do arquivo upload
    $caminho = "../uploads/"; //caminho

    $produto = $_POST['produto'];
    $descricao = $_POST['desc'];
    $nome_arquivo = basename($_FILES['foto']['name']);
    $foto = $id . "_" . $nome_arquivo;
    move_uploaded_file($_FILES['foto']['tmp_name'],  $caminho . $foto);


    //echo "Produto:" . $produto ."<br> Descrição:" . $descricao ."<br> Foto:" . $foto;
    cadastra($produto, $descricao, $foto);
    $_SESSION['msg'] = "Cadastro Realizado";
    header('Location: ../cadastra.php');
    die();
}

           
?>
