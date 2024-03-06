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
        $iconeDelete = "https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/16x16/delete.png";
        $iconAtualiza = "https://cdn-icons-png.flaticon.com/512/126/126794.png";
        require_once("ConexaoBD.php");
      
        //Listas os clientes existentes
        $ConBD = new ConexaoBD("localhost", "sistemaERP", "root", "");
        $clientes = $ConBD->executaSQL("SELECT * FROM clientes");

        echo "<h2>Clientes</h2>";
        foreach ($clientes as $cli) {?>
            <div class="linhaClientes">
                <div>
                <?php echo $cli['codigo']?> - <?php echo $cli['nome']?> - <?php echo $cli['telefone']?>
                </div>

                <div>
                <a href="excluir.php?codigo=<?php echo $cli['codigo'] ?>" onclick="return confirm('Deseja excluir <?php echo $cli['nome']?>?')">
                    <img src=<?php echo $iconeDelete ?> class="iconeBot" title="Excluir Cliente"></a>
                    <a href="indexcliente.php?codigo=<?php echo $cli['codigo']?>" class="linkMudaForm"  data-codigo="<?php echo $cli['codigo']?>"><img src="<?php echo $iconAtualiza ?>" class="iconeBot"></a>
                              
                </div>        
            </div>
        <?php } ?>

    
    <br><br>
 
    <?php
            
            
            if(!empty($_SESSION['msg'])){
                echo  $_SESSION['msg'];
                session_destroy();
                header('Refresh:5; url=indexcliente.php');
            }else{ ?>
            <div id="cad">
                <p>Cadastra</p>
                <form action="adicionarcliente.php" method="post">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" id="codigo" required>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" required>
                    <input type="submit" value="Adicionar" name="adicionar">
                </form>
            </div>


            <div id="edita">
                <p>editar</p>
                <?php
                    $codigoRecebe = $_GET['codigo'];
                    
                    $ConBD = new ConexaoBD("localhost", "sistemaERP", "root", "");
                    $clientesEdita = $ConBD->consultaSQL("SELECT * FROM clientes WHERE codigo = $codigoRecebe");
                    

                    ?>
                
                
                <form action="atualizaCliente.php" method="post">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" id="codigo" value="<?php echo $clientesEdita['codigo'] ?>">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $clientesEdita['nome'] ?>">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" value="<?php echo $clientesEdita['telefone'] ?>">
                    <input type="submit" value="Atualizar" name="atualizar">
                </form>
                
            </div>
                
            <?php } ?>
        
            <script type="text/javascript" src="visual/dom.js"></script>

</body>
</html>
