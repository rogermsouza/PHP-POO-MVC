<?php
  $venda = $_POST['venda'];
  $lucro = $_POST['porc'];
  
  $result = $venda - ($venda * $lucro)/100;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testes</title>
        <style>
            input {padding: 10px;}; 
        </style>
    </head>
    <body>
        <h2>Encontrar preço de custo:</h2>
        <form method="POST" action="testes.php">
            <label for="venda">Valor de Venda: </label><br>
            <input type="text" id="venda" name="venda" placeholder="Digite o valor de venda" value="<?php echo $venda ?>" /><br><br>
            <label for="venda">%Lucro: </label><br>
            <input type="text" id="porc" name="porc" placeholder="Digite a porcentagem de lucro" value="<?php echo $lucro ?>" />
            <br><br>
            <input type="submit" id="buttom" value="Calcular" />
            
        </form>
        <p>Preço de Custo:  <?php echo $result ?></p>
    </body>
</html>