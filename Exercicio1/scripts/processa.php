<?php
    require "funcoes.php";
    $resultado = "";

    if(!empty($_GET['inputValor'])){
        $num = $_GET['inputValor'];

        if($_GET['escolha'] == "circulo"){
            $resultado = circulo($num);
        }
        if($_GET['escolha'] == "triangulo"){
            $resultado = triangulo($result);
        }
    }else{
        echo "campo não pode estar vazio";
        echo "<div style='display: none;'>";
    }
    echo "Resultado: ".$resultado;
    echo "</div>";
?>