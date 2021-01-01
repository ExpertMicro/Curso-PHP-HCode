<?php

abstract class Pessoa {
  private $nome;
  private $idade;
  private $sexo;
  private $experiencia;

  public function __construct($nome, $idade, $sexo)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
    $this->experiencia = 0;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setIdade($idade) {
    $this->idade = $idade;
  }

  public function getIdade() {
    return $this->idade;
  }

  public function setSexo($sexo) {
    $this->sexo = $sexo;
  }

  public function getSexo()  {
    return $this->sexo;
  }

  public function setExperiencia($experiencia) {
    $this->experiencia = $experiencia;
  }

  public function getExperiencia() {
    return $this->experiencia;
  }

  public function ganharExp($n) {
    $this->experiencia += $n;
  }


}

?>