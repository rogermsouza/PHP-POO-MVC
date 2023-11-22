<?php
    class Data{
        private $dia;
        private $mes;
        private $ano;

        public function __construct($dia = 0, $mes = 0, $ano = 0)
        {
            $this->dia = sprintf("%02s", $dia);
            $this->mes = sprintf("%02s", $mes);
            $this->ano = $ano;
        }

        public function getDia(){
            return $this->dia;
        }
        public function setDia($dia){
            $this->dia = $dia;
        }
        public function maisDia($d){
            $this->dia += $d;
        }

        public function menosDia($d){
            $this->dia -= $d;
        }

        public function getMes(){
            return $this->mes;
        }
        public function setMes($mes){
            $this->mes = $mes;
        }

        public function getAno(){
            return $this->ano;
        }
        public function setAno($ano){ 
            $this->ano = $ano;
        }

        public function dataCompleta(){
            echo "Data: " .$this->dia ."/" .$this->mes  ."/" .$this->ano;
        }

        public function diferencaDatas($dia, $mes, $ano){
            $Sistema = $this->ano ."-" .$this->mes  ."-" .$this->dia;
            $entrada = $ano ."-" .$mes  ."-" .$dia;
            $datahoje = new DateTime($Sistema);
            $dataEntrada = new DateTime($entrada);

            $intervalo = $datahoje->diff($dataEntrada);
            return $intervalo->days;
        }


    }

$minhaData = new Data(13,9,2023);
echo $minhaData->dataCompleta();
if ((($minhaData->getAno() % 4 == 0 and $minhaData->getAno() % 100 != 0)) || ($minhaData->getAno() % 400 == 0))
{
    echo "<br>Bisexto";
}else {
    echo "<br>Não Bisexto";
}

echo "<br>----------<br>";

echo "<br>Diferença de dias: <br>";
echo $minhaData->diferencaDatas(15,9,2023);
echo "<br>----------<br>";
echo "Testando os Gets:";
echo "<br>Dia:" .$minhaData->getDia();
echo "<br>Mes:" .$minhaData->getMes();
echo "<br>Ano:" .$minhaData->getAno();

echo "<br>----------------<br><br>
Método Set ";

$minhaData->setDia(15);
$minhaData->setMes(05);
$minhaData->setAno(2024);

echo "<br>Dia:" .$minhaData->getDia();
echo "<br>Mes:" .$minhaData->getMes();
echo "<br>Ano:" .$minhaData->getAno();
?>