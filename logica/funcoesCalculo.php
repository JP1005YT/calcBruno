<?php

function adicao($num1, $num2){
    return($num1 + $num2);
}
function subtracao($num1, $num2){
    return($num1 - $num2);
}
function multiplicacao($num1, $num2){
    return($num1 * $num2);
}
function divisao($num1, $num2){
    return($num1 / $num2);
}
function CelciusParaFarenheit($num){
    return ($num * 9/5) + 32;
}
function FarenheitParaCelcius($num){
    return ($num - 32) * 5/9;
}
function MpK($num){
    return $num / 1000;
}
function CpM($num){
    return $num / 100;
}
function MpC($num){
    return $num * 100;
}
function KpM($num){
    return $num * 1000;
}
?>