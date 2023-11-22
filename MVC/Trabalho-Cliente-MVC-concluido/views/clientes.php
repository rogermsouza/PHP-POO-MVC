<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Clientes</title>
    <link rel="stylesheet" type="text/css" href="visual/front.css">
    
</head>
<body>
    <h1>CRUD de Clientes</h1>
    <br><br>
    
    
    <?php

        require_once("models/ClienteModel.php");
        require_once("controllers/clienteController.php");
        require_once("inc/elementos.php");
        require_once("ConexaoBD.php");
      

        //Listas os clientes existentes
        
        //$clientes = $ConBD->executaSQL("SELECT * FROM clientes ORDER BY codigo ASC");

        echo "<h2>Clientes</h2>";
        
        
        foreach ($this->clienteModelo->obterClientes()  as $cli) {?>
            <div class="linhaClientes">
                <div>
                    <?php echo $cli['codigo']?> - <?php echo $cli['nome']?> - <?php echo $cli['telefone']?>
                </div>

                <div>
                <a href="index.php?acao=excluir&codigo=<?php echo $cli['codigo'] ?>" onclick="return confirm('Deseja excluir <?php echo $cli['nome']?>?')">
                    <img src="<?php echo $iconeDelete ?>" class="iconeBot" title="Excluir Cliente"></a>
                    <a href="index.php?acao=alterar&codigo=<?php echo $cli['codigo']?>"  data-codigo="<?php echo $cli['codigo']?>"><img src="<?php echo $iconAtualiza ?>" class="iconeBot" title="Editar Cliente"></a>
                </div>      
            </div>
        <?php } ?>

    
    <br><br>
 
    <?php
            
            
            if(!empty($_SESSION['msg'])){
                $msg = $_SESSION['msg']; // Salva a mensagem em uma variável
                session_destroy();
                echo "<script>setTimeout(function(){window.location.href='index.php';}, 2000);</script>";
                echo $msg; // Exibe a mensagem
            }
            
            else{  ?>
            <div id="">
                <hr>
                <h2>Cadastro</h2>
                <form action="index.php" method="post" class="colunas3" name="Adicionar">
                    <div>
                        <label for="codigo">Código</label><br>
                        <input type="text" name="codigo" id="codigo" required>
                    </div>
                    <div>
                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" id="nome" required>
                    </div>
                    <div>
                        <label for="telefone">Telefone</label><br>
                        <input type="text" name="telefone" id="telefone" required>
                    </div>
                   
                    
                    
                    <input type="submit" value="Adicionar" name="Adicionar">
                </form>
            </div>
            <?php } ?>

</body>
</html>