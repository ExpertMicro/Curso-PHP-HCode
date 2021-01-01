<?php
/*
class Pessoa {
  public $nome = "Oziel";
  protected $idade = 28;
  private $senha = "12345";

  public function verDados() {
    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";
  }
}

$obj = new Pessoa();

$obj->verDados();
*/

/*
class Pessoa {
  public $nome = "Oziel";
  protected $idade = 28;
  private $senha = "12345";

  public function verDados() {
    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";
  }
}

class Programador extends Pessoa {
  public function verDados() {
    echo get_class($this);

    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";
  }
}

$obj = new Programador();
$obj->verDados();

*/

/*
class Documento {
  private $numero;
  
  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($numero) {
    $this->numero = $numero;
  }
}

class CPF extends Documento {
  public function validar():bool {
    $numeroCPF = $this->getNumero();
    return true;
  }
}

$doc = new CPF();
$doc->setNumero("75660644104");
$doc->validar();
$doc->getNumero();

*/

/*
interface Veiculo {
  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
}

class Civic implements Veiculo {
  public function acelerar($velocidade)
  {
    echo "O veiculo acelerou até ".$velocidade. " Km/h";
  }

  public function frenar($velocidade)
  {
    echo "O veiculo frenou até " .$velocidade. "Km/h";
  }

  public function trocarMarcha($marcha)
  {
    echo "O veiculo engatou a marcha " .$marcha;
  }
}

$carro = new Civic();
$carro->trocarMarcha(1);
*/


/*
interface Veiculo {
  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {
  public function acelerar($velocidade)
  {
    echo "O veiculo acelerou até ".$velocidade. " Km/h";
  }

  public function frenar($velocidade)
  {
    echo "O veiculo frenou até " .$velocidade. "Km/h";
  }

  public function trocarMarcha($marcha)
  {
    echo "O veiculo engatou a marcha " .$marcha;
  }
}

class DelRey extends Automovel {
  public function empurrar() {

  }
}

$carro = new Automovel();
$carro->acelerar(200);
*/

abstract class Animal {
  public function falar() {
    return "Som";
  }

  public function mover() {
    return "Andar";
  }
}

class Gato extends Animal {
  public function falar() {
    return "Mia";
  }
}

class Cachorro extends Animal {
  public function falar() {
    return "Late";
  }
}


class Passaro extends Animal {
  public function falar() {
    return "Canta";
  }

  public function mover() {
    return "Voa e " .parent::mover();
  }
}


$pluto = new Cachorro();

echo $pluto->falar() ."<br>";
echo $pluto->mover() ."<br>";

echo "---------------------" ."<br>";

$garfield = new Gato();
echo $garfield->falar() ."<br>";
echo $garfield->mover() ."<br>";

echo "---------------------" ."<br>";
$ave = new Passaro();
echo $ave->falar() ."<br>";
echo $ave->mover() ."<br>";

?>