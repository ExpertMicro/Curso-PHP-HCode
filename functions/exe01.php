<?php
/*
function ola() {
  $arguments = func_get_args();
  return $arguments;
}

var_dump(ola("Bom dia",10));
*/

/*
$a = 10;

function trocaValor(&$b) {
  $b += 50;
  return $b;

}


echo trocaValor($a);
//echo "<br>";
//echo $a;

*/

/*
$data = array(
  'nome' => 'João',
  'idade' => 20
);

foreach($data as $value) {
  if(gettype($value) === 'integer') {
    $value += 10;
  }
  echo $value;
}
echo "<br>";
print_r($data);

*/

/*
function soma(float...$values):float {
  return array_sum($values);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);

*/

$hierarquia = array(
  array(
    'nome_cargo' => 'CEO',
    'subordinados' => array(
      //Diretor
      array(
        'nome_cargo' => 'Diretor Comercial',
        'subordinados' => array(
          'nome_cargo' => 'Gerente de Vendas'
        )
      ),
      array(
        'nome_cargo' => 'Diretor Financeiro',
        'subordinados' => array(
          'nome_cargo' => 'Gerente de contas a pagar',
          'subordinados' => array(
            'nome_cargo' => 'Supervisor de Pagamentos'
          )
        )
      ),
      array(
        'nome_cargo' => 'Gerente de compras',
        'subordinados' => array(
          'nome_cargo' => 'Supervisor de Suplementos'
        )
      )
    )
  )
);

function exibe($cargos) {
  $html = '<ul>';

  foreach($cargos as $cargo) {
    $html .= "<li>";
    $html .= $cargos['nome_cargo'];
    
    if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
      $html .= exibe($cargo['subordinados']);
    }

    $html .= "</li>";
  }

  $html .= '</ul>';

  return $html;

}

echo exibe($hierarquia);

?>