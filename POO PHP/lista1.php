<?php
session_start();
$base = "";
$altura = "";
$baseRet = "";
$alturaRet = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios 1 - PHP</title>
    <link href="css/geral.css" rel="stylesheet" type="text/css">
</head>
<body>
    <article>
        <h1>Lista 1</h1>
        <form method="GET" action="scripts/processa.php">
            <label for="circulo">Calcular Cículo: </label>
            <input type="text" name="inputValor" id="circulo" placeholder="Digite o raio">
            <input type="hidden" name="escolha" value="circulo">
            <br>
            
            <input type="submit" value="Calcular">
        </form>
        <p>
            Resultado =
            <?php if(isset($_SESSION['circulo'])){
                        echo $_SESSION['circulo'];
                    }
            ?></p>
        <hr>
        <form method="GET" action="scripts/processa.php">
            <label for="Triangulo">Calcular Triangulo: </label>
            <input type="text" name="inputBase" id="triangulo" placeholder="Digite a base">
            <input type="text" name="inputAltura" id="triangulo" placeholder="Digite a altura">
            <input type="hidden" name="escolha" value="triangulo">
            <br>
            
            <input type="submit" value="Calcular">
        </form>
        <p>Resultado = Base: <?php echo $_SESSION['base']; ?> x Altura: <?php echo $_SESSION['altura']; ?> =
        <?php
            if(isset($_SESSION['triangulo'])){
                echo $_SESSION['triangulo'];
            }
        ?></p>
        <hr>
        <form method="GET" action="scripts/processa.php">
            <label for="retangulo">Calcular Retangulo: </label>
            <input type="text" name="inputBaseRet" id="triangulo" placeholder="Digite a base">
            <input type="text" name="inputAlturaRet" id="triangulo" placeholder="Digite a altura">
            <input type="hidden" name="escolha" value="retangulo">
            <br>
            
            <input type="submit" value="Calcular">
        </form>
        <p>Resultado = Base: <?php echo $_SESSION['baseRet']; ?> x Altura: <?php echo $_SESSION['alturaRet']; ?> =
        <?php
            if(isset($_SESSION['retangulo'])){
                echo $_SESSION['retangulo'];
            }
        ?>
        </p>
        <hr>
    </article>
</body>
</html>