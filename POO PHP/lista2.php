<?php
$soma = 0;

$valor = 12345;

foreach($i = 0; $i < (strlen($valor)); $i++){
    $soma = $soma + $valor[i];
}

echo "Soma <br>";
echo $soma;


?>
