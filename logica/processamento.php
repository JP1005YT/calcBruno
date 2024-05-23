<?php

require_once "funcoesCalculo.php";

$resultado = "";
session_start(); //Iniciando a session! Permintindo uso de varáveis de session!

if(!empty($_GET['inputNum1']) && !empty($_GET['inputNum2'])){

    $numeros1 = $_GET['inputNum1'];
    $numeros2 = $_GET['inputNum2'];

    if($_GET['selectOperacoes'] == "adicao"){
        $resultado = $numeros1 . " + " . $numeros2 . " = " . adicao($numeros1,$numeros2);
    }
    else if($_GET['selectOperacoes'] == "subtracao"){
        $resultado = $numeros1 . " - " . $numeros2 . " = " . subtracao($numeros1,$numeros2);
    }
    else if($_GET['selectOperacoes'] == "multiplicacao"){
        $resultado = $numeros1 . " x " . $numeros2 . " = " . multiplicacao($numeros1,$numeros2);
    }
    else{
        $resultado = $numeros1 . " / " . $numeros2 . " = " . divisao($numeros1,$numeros2);
    }

    //echo $resultado;
    //Guarda o resultado na variável de session
    $_SESSION['resultado'] = $resultado;

    //Comando HEADER (PHP) redireciona para uma página especificada
    header('location:../index.php');
    die();
}

if(!empty($_POST['tempvalue'])){
        if($_POST['selectOperacoes'] == "CelciusParaFarenheit"){
            $resp = CelciusParaFarenheit($_POST['tempvalue']) . "ºF";
        }else{
            $resp = FarenheitParaCelcius($_POST['tempvalue'])  . "ºC";
        }
    $_SESSION['resultado'] = $resp;
    header('location:../pages/temperatura/');
}

if(!empty($_GET['convertMedida'])){
    $op = $_GET['selectOperacoes'];
    if($op == 'CpM'){
        $resp = CpM($_GET['convertMedida']) . " Metros";
    }else if($op == "MpC"){
        $resp = MpC($_GET['convertMedida']) . " Centimetros";
    }else if($op == "MpK"){
        $resp = MpK($_GET['convertMedida']) . " Kilometros";
    }else{
        $resp = KpM($_GET['convertMedida']) . " Metros";
        KpM($_GET['convertMedida']);
    }
    $_SESSION['resultado'] = $resp;
    header('location:../pages/conversor/');
}

?>