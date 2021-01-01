<?php

//$nome = $_GET["a"];
//var_dump($nome);

//$ip = $_SERVER["SCRIPT_NAME"]; Pega o path
//$ip = $_SERVER["REMOTE_ADDR"]; Pega o ip

//$nome = "Oziel";
//function teste() {
//  $nome = "Ola";
//}

//teste();
//global $nome;
//echo $nome;

//function teste2() {
//  echo $nome;
//}
//teste2();

//$a <==> $b igual 0  $a > $b -1 $b > $a 1


//$a = NULL;
//$b = NULL;
//$c = 10;

//echo $a ?? $b ?? $c;

//$nome = "HCode";
 
//$nome2 = 'Treinamento';
//aspas simples tudo e texto
//var_dump($nome);/
//$nome3 = "ABC $nome";
//echo $nome3;

//$nome = "Oziel Goncalves";


//echo strtoupper($nome);

//echo strtolower($nome);
//echo "</br>";

//echo ucwords($nome);

//echo "</br>";

//echo ucfirst($nome);

//$empresa = "HCode";
//$empresa = str_replace("o","0", $empresa);
//echo $empresa;


//$frase = "A repetição é mãe da retenção";
//$palavra = "mãe";
//$q = strpos($frase, $palavra);
//echo $q;

//$texto = substr($frase, 0, $q);
//var_dump($texto);

//$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
//echo $texto2;

//include "includes/funcao.php";
//require_once "includes/funcao.php";//require obriga que o arquivo exista e esteja funcionando
//$resultado = soma(10,20);
//echo $resultado;
/*
$diaSemana = 8;//date("w");
//echo $diaSemana;

switch($diaSemana) {
  case 1: 
    echo "Domingo";
  break;
  case 2:
    echo "Segunda";
  break;
  case 3:
    echo "Terça";
  break;
  case 4:
    echo "Quarta";
  break;
  case 5:
    echo "Quinta";
  break;
  case 6:
    echo "Sexta";
  break;
  case 7:
    echo "Sábado";
  break;

  default: 
  echo "Data invalida";
}
*/
/*
echo "<select>";

for($i = date("Y"); $i >= date("Y") - 100; $i--) {
  echo "<option value='$i'>$i</option>";
}
echo "</select>"

*/
/*
$meses = array(
  "Janeiro", "Fevereiro", "Março", 
  "Abril", "Maio", "junho", "julho", "Agosto",
  "Setembro", "Outubro", "Novembro", "Dezembro"
);

foreach($meses as $index => $mes) {
  echo "<br>";
  echo "Indice: ".$index;
  echo "<br>";
  echo "O mês é ".$mes;
}

*/

//$frutas = array("laranja", "abacaxi", "melancia");
//print_r($frutas);

/*$pessoas = array();

array_push($pessoas, array(
  'nome' => 'João',
  'idade' => 20
));

array_push($pessoas, array(
  'nome' => 'Oziel',
  'idade' => 27
));

echo json_encode($pessoas);
*/

/*$json = '
[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);
var_dump($data);
*/

/*define("SERVIDOR", "127.0.0.1");
echo SERVIDOR;
*/

/*define("BANCO", [
  '127.0.0.1',
  'root',
  'password',
  'test'
]);

print_r(BANCO);
*/

//echo PHP_VERSION;
echo DIRECTORY_SEPARATOR;
?>