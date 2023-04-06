<?php

$body = file_get_contents("php://input");

$data = json_decode($body);

/*$fin = $data[0];
$nameInfo = $fin -> name;
$nativeName = $nameInfo -> nativeName;
$finName = $nativeName -> fin -> official;
$sweName = $nativeName -> swe -> official;*/

$finName = $data[0] -> name -> nativeName -> fin -> official;
$sweName = $data[0] -> name -> nativeName -> swe -> official;

echo $finName." ".$sweName;