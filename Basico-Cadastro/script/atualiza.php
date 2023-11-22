<?php

session_start();
require "conecta.php";


    //$id = "imaGem"; // primeiro nome do arquivo upload
    //$caminho = "../uploads/"; //caminho
    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $descricao = $_POST['desc'];
    //$nome_arquivo = basename($_FILES['foto']['name']);
    $foto = $_POST['foto'];
    //move_uploaded_file($_FILES['foto']['tmp_name'],  $caminho . $foto);


    //echo "Produto:" . $produto ."<br> Descrição:" . $descricao ."<br> Foto:" . $foto;
    editaProduto($id, $produto, $descricao, $foto);
    $_SESSION['msg'] = "Edição Realizada";
    header('Location: ../cadastra.php');
    die();

           
?>
