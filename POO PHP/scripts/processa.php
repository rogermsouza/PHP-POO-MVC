<?php
   require "funcoes.php";
   session_start();

   

   $resultRetangulo = "";


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
   $_SESSION['base'] = $base;
   $_SESSION['altura'] = $altura;
   $_SESSION['triangulo'] = $resultTriangulo;
   $_SESSION['baseRet'] = $baseRet;
   $_SESSION['alturaRet'] = $alturaRet;
   $_SESSION['retangulo'] = $resultRetangulo;
   $_SESSION['circulo'] = $resultado;
   header('location:../lista1.php');
    die();
?>