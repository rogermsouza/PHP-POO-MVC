<?php
    session_start();
    require "script/conecta.php";
    $caminhoFotos = "uploads/";
    $id = $_GET['id'];
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
         <?php
            $dadosProduto = buscaProduto($id);
            $item = mysqli_fetch_assoc($dadosProduto);
        ?>
        <form method="POST" id="cad" action="script/atualiza.php">
            <label for="produto">Nome do produto:</label><br>
            <input type="text" id="produto" name="produto" value="<?php echo $item['nome_prod'] ?>"><br>
            <input type="hidden" id="id" name="id" value="<?php echo $item['id'] ?>">

            <label for="desc">Desrição:</label><br>
            <textarea rows="3" name="desc" cols="40">
                <?php echo $item['descricao'] ?>
            </textarea><br>

            <!-- <input type="file" id="foto" name="foto" > --><br>
            <input type="hidden" id="foto" name="foto" value="<?php echo $item['foto'] ?>">

            <input type="submit" value=">> Atualizar <<">

        </form>
    </div>
    <hr>
   
    
            <p>Produto: <?php echo $item['nome_prod'] ?></p>
            <p>Descrição:  <?php echo $item['descricao'] ?> </p>
            <p>Foto:  <?php echo "<img src=" .$caminhoFotos .$item['foto'] ." width='150px'>" ?> </p>
            <div style="width: 30$"><hr></div>
         
</body>
</html>