<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de POO MVC</title>
    <link rel="stylesheet" type="text/css" href="visual/front.css">
    
</head>
<body>
    <h1>CRUD de POO MVC</h1>
    <br><br>
    
    
    <?php

        require_once("models/ComputadorModel.php");
        require_once("controllers/computadorController.php");
        require_once("inc/elementos.php");
        require_once("ConexaoBD.php");
      

        //Listas os clientes existentes
        
        //$clientes = $ConBD->executaSQL("SELECT * FROM clientes ORDER BY codigo ASC");

        echo "<h2>Computadores</h2>";
        
        
        foreach ($this->computadorModelo->obterComputador()  as $comp) {?>
            <div class="linhaClientes">
                <div>
                    <?php echo $comp['com_cod']?> - <?php echo $comp['com_descricao']?> - <?php echo $comp['com_fabricante']?>
                </div>

                <div>
                <a href="index.php?acao=excluir&com_cod=<?php echo $comp['com_cod'] ?>" onclick="return confirm('Deseja excluir <?php echo $comp['com_fabricante']?>?')">
                    <img src="<?php echo $iconeDelete ?>" class="iconeBot" title="Excluir Computador"></a>
                    <a href="index.php?acao=alterar&com_cod=<?php echo $comp['com_cod']?>"><img src="<?php echo $iconAtualiza ?>" class="iconeBot" title="Editar Computador"></a>
                </div>      
            </div>
        <?php } ?>

    
    <br><br>
 
    <?php

    //$com_cod, $com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios
            
            
            if(!empty($_SESSION['msg'])){
                $msg = $_SESSION['msg']; // Salva a mensagem em uma variável
                session_destroy();
                echo "<script>setTimeout(function(){window.location.href='index.php';}, 2000);</script>";
                echo $msg; // Exibe a mensagem
            }
            
            else{  ?>
            <div id="">
                <hr>
                <h2>Cadastro de Computador</h2>
                <form action="index.php" method="post" class="colunas3" name="Adicionar">
                    <div>
                        <label for="com_descricao">Descrição</label><br>
                        <input type="text" name="com_descricao" id="com_descricao" required>
                    </div>
                    <div>
                        <label for="com_fabricante">Fabricante</label><br>
                        <input type="text" name="com_fabricante" id="com_fabricante" required>
                    </div>
                    <div>
                        <label for="com_numeroserie">Número de Série</label><br>
                        <input type="text" name="com_numeroserie" id="com_numeroserie" required>
                    </div>
                    <div>
                        <label for="com_acessorios">Acessórios</label><br>
                        <input type="text" name="com_acessorios" id="com_acessorios" required>
                    </div>
                   
                    
                    
                    <input type="submit" value="Adicionar" name="Adicionar">
                </form>
            </div>
            <?php } ?>

</body>
</html>