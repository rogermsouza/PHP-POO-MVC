<?php
	ini_set("display_errors","On");
	session_start();
	require "funcoesBD.php";
	
	$id = "$_GET['id']";
    //$consulta = "select * FROM produtos where id = $id";
	//$resultBusca = mysqli_query($conexao, $consulta);
	//$produto = mysqli_fetch_assoc($resultBusca);
	
	function excluirProduto($cod){

		$conexao = conectarBD();
		$exclui = "DELETE FROM produto where id = $cod";
		mysqli_query($conexao,$exclui);
	}
	excluirProduto($id);
	$_SESSION['msg'] = "Produto $id excluído com sucesso";
    header('Location:cadastra.php');

?>