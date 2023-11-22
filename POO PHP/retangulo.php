<?php
class Retangulo
{
    // Atributos
    private $altura;
    private $largura;

    //métodos
    //public function __construct(){
    public function __construct($altura = 1, $largura = 1)
    {
        //$this->altura = 1;
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;  // recebendo altura que veio por parâmetro
    }

    public function getLargura()
    {
        return $this->largura;
    }
    public function setLargura($largura)
    {
        $this->largura = $largura;  // recebendo largura que veio por parâmetro
    }



    public function calcPerimetro()
    {
        return 2 * $this->altura + 2 * $this->largura;
    }
    public function calcArea()
    {
        return $this->altura * $this->largura;
    }

    public function ehQuadrado()
    {
        return $this->altura == $this->largura;
    }
}
$meuRetangulo = new Retangulo(3, 6);

echo "Área do Retangulo: " . $meuRetangulo->calcArea();
if ($meuRetangulo->ehQuadrado()) {
    echo "<br><br>Retangulo é um quadrado !!";
} else {
    echo "<br><br>Não é um quadrado !!";
}
    //$meuRatangulo->setAltura(3);
    //$meuRatangulo->setLargura(4);
