<?php

$n1= $_GET["n1"];
$n2= $_GET["n2"];


$summa = $n1 + $n2;
$erotus = $n1 - $n2;
$tulo = $n1 * $n2;

$response = array("summa"=>$summa, "erotus" => $erotus, "tulo" => $tulo);

$json = json_encode($response);
header('Content-type: application/json');
echo $json;