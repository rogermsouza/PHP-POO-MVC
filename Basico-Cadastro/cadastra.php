<?php
    session_start();
    require "script/conecta.php";
    $caminhoFotos = "uploads/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
    <link href="script/estilos.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h2>Cadastro de Produtos</h2>
    <hr>
    <div id="volta">
         <- << Voltar
    </div>
    <div class="mensagem">
        <?php
            if(!empty($_SESSION['msg'])){
                echo "<span  class='aviso'>" .$_SESSION['msg'] ."</span>";
                session_destroy();
                header('Refresh:5; url=cadastra.php');
            }
        ?>
    </div>
    <div>
        <form method="POST" id="cad" action="script/processa.php" enctype="multipart/form-data">
            <label for="produto">Nome do produto:</label><br>
            <input type="text" id="produto" name="produto" required><br>

            <label for="desc">Desrição:</label><br>
            <textarea rows="3" name="desc" cols="40"></textarea><br>

            <input type="file" id="foto" name="foto"><br>

            <input type="submit" value=">> Cadastrar <<">
            


        </form>
    </div>
    <hr>
    <?php
         $listarClientes = exibeProdutos();
         while ($item = mysqli_fetch_assoc($listarClientes)){ ?>
            <p>ID = <?php echo $item['id'] ?> </p>
            <p>Produto: <?php echo $item['nome_prod'] ?> / <a href="editaProduto.php?id=<?php echo $item['id'] ?>" >Editar</a> / <a href="excluirProd.php?id=<?php echo $item['id'] ?>" >Excluir</a></p>
            <p>Descrição:  <?php echo $item['descricao'] ?> </p>
            <p>Foto:  <?php echo "<br><img src=" .$caminhoFotos .$item['foto'] ." width='150px'>" ?> </p>
			<div style="width: 30$"><hr></div>
            
         <?php } ?>


         <!-- Editando -->

</body>
</html>