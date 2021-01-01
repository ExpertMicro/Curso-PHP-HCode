<?php

//echo date("d/m/Y H:i:s");

//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//echo date("l, d/m/Y", $ts);
/*
header('Content-Type: text/html; charset=utf-8');

setlocale(LC_ALL, "pt_BR", "pt-BR.utf-8", "portuguese");
echo strftime("%A %B")
*/

//$dt = new DateTime();
//echo $dt->format("d/m/Y H:i:s");

$dt = new DateTime();
$periodo = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");
$dt->add($periodo);
echo "<br>";
echo $dt->format("d/m/Y H:i:s");


?>