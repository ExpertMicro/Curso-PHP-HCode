<?php
/*
class Pessoa {
  public $nome;
  public function falar() {
    return "O meu nome é ".$this->nome;
  }
}

$oziel = new Pessoa();
$oziel->nome = "Oziel Gonçalves";
echo $oziel->falar();
*/

/*
class Carro {
  private $modelo;
  private $motor;
  private $ano;

  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($modelo) {
    $this->modelo = $modelo;
  }

  public function getMotor():float {
    return $this->motor;
  }

  public function setMotor($motor) {
    $this->motor = $motor;
  }

  public function getAno():int {
    return $this->ano;
  }

  public function setAno($ano) {
    $this->ano = $ano;
  }

  public function exibir() {
    return array(
      "modelo"=>$this->getModelo(),
      "motor"=>$this->getMotor(),
      "ano"=>$this->getAno()
    );
  }
}

$gol = new Carro();

$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());
*/

/*
class Documento {
  private $numero;

  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($numero) {
    $resultado = Documento::validaCPF($numero);

    if($resultado === false) {
      throw new Exception("CPF inválido");
    }

    $this->numero = $numero;
  }

  public static function validaCPF($cpf):bool {//com o metodo static não precisa criar o objeto
    if(empty($cpf)) {
      return false;
    }

    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
   
  
    if (strlen($cpf) != 11) {
      echo "length";
      return false;
    }
  
    else if ($cpf == '00000000000' || 
      $cpf == '11111111111' || 
      $cpf == '22222222222' || 
      $cpf == '33333333333' || 
      $cpf == '44444444444' || 
      $cpf == '55555555555' || 
      $cpf == '66666666666' || 
      $cpf == '77777777777' || 
      $cpf == '88888888888' || 
      $cpf == '99999999999') {
      return false;

    } else {   
       
      for ($t = 9; $t < 11; $t++) {
           
          for ($d = 0, $c = 0; $c < $t; $c++) {
              $d += $cpf{$c} * (($t + 1) - $c);
          }
          $d = ((10 * $d) % 11) % 10;
          if ($cpf{$c} != $d) {
              return false;
          }
      }

      return true;
    }
  }
}

/*
$cpf = new Documento();

$cpf->setNumero("7566644104");

var_dump($cpf->getNumero());
*/

//var_dump(Documento::validaCPF("75660644104"));

/*
class Endereco {
  private $logradouro;
  private $numero;
  private $cidade;

  public function __construct($a,$b,$c) {
    $this->logradouro = $a;
    $this->numero = $b;
    $this->cidade = $c;
  }

  public function __destruct()
  {
    var_dump("Destruir");
  }

  public function __toString()
  {
    return $this->logradouro . " , " .$this->numero ." , " .$this->cidade;
  }

}

$meuEndereco = new Endereco("Rua travessa",170,"Goiás");
echo $meuEndereco;
//var_dump($meuEndereco);
//unset($meuEndereco);
*/

/*
class Pessoa {
  public $nome = "Ramus Lerdof";
  protected $idade = 48;
  private $senha = "123456";

  public function verDados() {
    echo $this->nome . "<br/>";
    echo $this->idade . "<br/>";
    echo $this->senha . "<br/>";
  }
}

class Programador extends Pessoa {
  public function verDados() {

    echo get_class($this) . "<br/>";

    echo $this->nome . "<br/>";
    echo $this->idade . "<br/>";
    echo $this->senha . "<br/>";
  }
}

$objeto = new Programador();
//echo $objeto->idade . "<br/>";
$objeto->verDados();
*/

class Documento {
  private $numero;

  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($n) {
    $this->numero = $n;
  }

}


class CPF extends Documento {

  public function validar():bool {
    return true;
  }
}

$doc = new CPF();

$doc->setNumero(756606441-00);
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();

?>