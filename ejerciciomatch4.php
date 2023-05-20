<?php
$dia= '20';
$mes= '06';
$año= '2023';

$fecha= match ($mes){
"enero", "01"=> 'selecciono el primer mes, enero',
"febrero","02"=> 'selecciono el segundo mes, febrero',
"marzo","03"=> 'selecciono el tecer mes, marzo',
"abril","04"=> 'selecciono el cuarto mes, abril',
"mayo", "05"=> 'selecciono el quinto mes, mayo',
"junio","06"=> 'selecciono el sexto mes, junio',
"julio","07"=> 'selecciono el septimo mes, julio',
"agosto","08"=> 'selecciono el octavo mes, agosto',
"septiembre","09"=> 'selecciono el noveno mes, septiembre',
"octubre", "10"=> 'selecciono el decimo mes, octubre',
"noviembre", "11"=> 'selecciono el onceavo mes, noviembre',
"diciembre", "12"=> 'selecciono el doceavo mes, diciembre',

};
echo $fecha;
?>