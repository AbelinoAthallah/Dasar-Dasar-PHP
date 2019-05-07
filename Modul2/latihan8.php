<?php

$arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo $arrNilai['Ani'];  //80
echo $arrNilai['Otim'];  //90

$arrNilai = array();
$arrNilai['Ani'] = 80;
$arrNilai['Ana'] = 95;
$arrNilai['Otim'] = 77;
echo $arrNilai['Ana'];  //95
echo $arrNilai['Ani'];  //80
?>