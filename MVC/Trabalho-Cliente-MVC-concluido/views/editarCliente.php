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
    
    


            <div id="">
                <hr>
                <h2>Editar Cadastro</h2>
                <form action="index.php" method="post" class="colunas3" name="alterar">
                    <div>
                        <label for="codigo">Código</label><br>
                        <input type="text" name="codigo" id="codigo" value="<?php echo $cliente['codigo'] ?>">
                    </div>
                    <div>
                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" id="nome"  value="<?php echo $cliente['nome'] ?>">
                    </div>
                    <div>
                        <label for="telefone">Telefone</label><br>
                        <input type="text" name="telefone" id="telefone"  value="<?php echo $cliente['telefone'] ?>">
                    </div>
                   
                    
                    
                    <input type="submit" value="Atualizar" name="Atualizar">
                </form>
            </div>


</body>
</html>