<?php
    require "scripts/funcoes.php";
    $base = "";
    $altura = "";
    $baseRet = "";
    $alturaRet = "";
    
    $resultTriangulo = "";
    $resultRetangulo = "";
    $resultado = "";

    if(!empty($_GET['inputValor'])){
        $num = $_GET['inputValor'];

        if($_GET['escolha'] == "circulo"){
            $resultado = circulo($num);
        }
    }
    if(!empty($_GET['inputBase']) && !empty($_GET['inputAltura'])){
        $base = $_GET['inputBase'];
        $altura = $_GET['inputAltura'];

        if($_GET['escolha'] == "triangulo"){
            $resultTriangulo = triangulo($base, $altura);
        }
    }else{
        $resultTriangulo = "Campos não podem estar vazios!";
    }
    if(!empty($_GET['inputBaseRet']) && !empty($_GET['inputAlturaRet'])){
        $baseRet = $_GET['inputBaseRet'];
        $alturaRet = $_GET['inputAlturaRet'];

        if($_GET['escolha'] == "retangulo"){
            $resultRetangulo = retangulo($baseRet, $alturaRet);
        }
    }else{
        $resultRetangulo = "Campos não podem estar vazios!";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios 1 - PHP</title>
</head>
<body>
    <h1>Lista 1</h1>
    <form method="GET" action="lista1.php">
        <label for="circulo">Calcular Cículo: </label>
        <input type="text" name="inputValor" id="circulo" placeholder="Digite o raio">
        <input type="hidden" name="escolha" value="circulo">
        <br>
        
        <input type="submit" value="Calcular">
    </form>
    <p>Resultado = <?php echo $resultado ?></p>
    <hr>
    <form method="GET" action="lista1.php">
        <label for="Triangulo">Calcular Triangulo: </label>
        <input type="text" name="inputBase" id="triangulo" placeholder="Digite a base">
        <input type="text" name="inputAltura" id="triangulo" placeholder="Digite a altura">
        <input type="hidden" name="escolha" value="triangulo">
        <br>
        
        <input type="submit" value="Calcular">
    </form>
    <p>Resultado = Base: <?php echo $base ?> x Altura: <?php echo $altura ?> =  <?php echo $resultTriangulo ?></p>
    <hr>
    <form method="GET" action="lista1.php">
        <label for="retangulo">Calcular retangulo: </label>
        <input type="text" name="inputBaseRet" id="triangulo" placeholder="Digite a base">
        <input type="text" name="inputAlturaRet" id="triangulo" placeholder="Digite a altura">
        <input type="hidden" name="escolha" value="retangulo">
        <br>
        
        <input type="submit" value="Calcular">
    </form>
    <p>Resultado = Base: <?php echo $baseRet ?> x Altura: <?php echo $alturaRet ?> =  <?php echo $resultRetangulo ?></p>
    <hr>

    <p><a href="">Calcular área de um quadrado</a></p>
    <p><a href="">Calcular área de um retangulo</a></p>
</body>
</html>