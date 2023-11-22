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
        session_start();
        
        require_once("ConexaoBD.php");
        require_once("elementos.php");
        
        //Listas os clientes existentes
        $ConBD = new ConexaoBD("localhost", "sistemaERP", "root", "");
        $clientes = $ConBD->executaSQL("SELECT * FROM clientes ORDER BY codigo ASC");

        echo "<h2>Clientes</h2>";
        foreach ($clientes as $cli) {?>
            <div class="linhaClientes">
                <div>
                <?php echo $cli['codigo']?> - <?php echo $cli['nome']?> - <?php echo $cli['telefone']?>
                </div>

                <div>
                <a href="excluir.php?codigo=<?php echo $cli['codigo'] ?>" onclick="return confirm('Deseja excluir <?php echo $cli['nome']?>?')">
                    <img src=<?php echo $iconeDelete ?> class="iconeBot" title="Excluir Cliente"></a>
                    <a href="atualizarCliente1.php?codigo=<?php echo $cli['codigo']?>"><img src="<?php echo $iconAtualiza ?>" class="iconeBot"></a>
                </div>    
            </div>
        <?php } ?>

    <br><br>

            <div id="">
                <hr>
                <p>
                    <a href="javascript:history.back()"><img src="<?php echo $voltarCadastro ?>" width="32px"></a>
                    <a href="index.php"><img src="<?php echo $cadastrarNovo ?>" width="32px"></a>
                </p>
                <h2>Atualização</h2>
                <?php
                    $codigoRecebe = $_GET['codigo'];
                    $ConBD = new ConexaoBD("localhost", "sistemaERP", "root", "");
                    $clientesEdita = $ConBD->consultaSQL("SELECT * FROM clientes WHERE codigo = $codigoRecebe");
                ?>
                
                
                <form action="processaAtualiza.php" method="post">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" id="codigo" value="<?php echo $clientesEdita['codigo'] ?>">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $clientesEdita['nome'] ?>">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" value="<?php echo $clientesEdita['telefone'] ?>">
                    <input type="submit" value="Atualizar" name="atualizar">
                </form>
                
            </div>
                
       


</body>
</html>