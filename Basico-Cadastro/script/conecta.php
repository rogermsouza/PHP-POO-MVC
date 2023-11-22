<?php

    function conectarBD(){
        $conecta = mysqli_connect("localhost", "root", "", "revisao");
        return ($conecta);
    }

    function cadastra($produto, $desc, $foto){
        $conecta = conectarBD();
        $envia = "INSERT INTO produtos (nome_prod, descricao, foto)
        VALUES ('$produto', '$desc', '$foto')";
        mysqli_query($conecta, $envia);
    }

    function exibeProdutos(){
        $conecta = conectarBD();
        $listar = "SELECT * FROM produtos";
        $listarClientes = mysqli_query($conecta, $listar);
        return $listarClientes;
    }


    function buscaProduto($id){
        $conecta = conectarBD();
        $exibe = "SELECT * FROM produtos where id = $id";
        $dadosProduto = mysqli_query($conecta, $exibe);
        return $dadosProduto;
    }

    function editaProduto($id, $produto, $desc, $foto){
        $conecta = conectarBD();
        $editar = "UPDATE produtos SET nome_prod = '$produto', descricao = '$desc', foto = '$foto' WHERE id = $id";
        mysqli_query($conecta, $editar);
    }

    function excluiProd($id){
        $conecta = conectarBD();
        $elimina = "DELETE FROM produtos WHERE id = $id";
        mysqli_query($conecta, $elimina);
    }


   

?>
