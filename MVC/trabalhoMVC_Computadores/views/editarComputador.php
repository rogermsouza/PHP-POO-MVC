<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de POO MVC</title>
    <link rel="stylesheet" type="text/css" href="visual/front.css">
    
</head>
<body>
    <?php
        require_once("inc/elementos.php");
    ?>
    <h1><a href="javascript:history.go(-1)">
        <img src="<?php echo $voltar ?>" class="botVoltar" title="Voltar para página anterior">
    </a>CRUD de POO MVC</h1>
    <p>
    
    </p>
    
    


            <div id="">
                <hr>
                <h2>Editar Computador</h2>
                <form action="index.php" method="post" class="colunas3" name="alterar">

                   
                        <input type="hidden" name="com_cod" id="com_cod" value="<?php echo $computador['com_cod'] ?>">
                    
                    <div>
                        <label for="com_descricao">Descrição</label><br>
                        <input type="text" name="com_descricao" id="com_descricao" value="<?php echo $computador['com_descricao'] ?>">
                    </div>
                    <div>
                        <label for="com_fabricante">Fabricante</label><br>
                        <input type="text" name="com_fabricante" id="com_fabricante" value="<?php echo $computador['com_fabricante'] ?>">
                    </div>
                    <div>
                        <label for="com_numeroserie">Número de Série</label><br>
                        <input type="text" name="com_numeroserie" id="com_numeroserie" value="<?php echo $computador['com_numeroserie'] ?>">
                    </div>
                    <div>
                        <label for="com_acessorios">Acessórios</label><br>
                        <input type="text" name="com_acessorios" id="com_acessorios" value="<?php echo $computador['com_acessorios'] ?>">
                    </div>
                   
                    <input type="submit" value="Atualizar" name="Atualizar">
                </form>
            </div>


</body>
</html>