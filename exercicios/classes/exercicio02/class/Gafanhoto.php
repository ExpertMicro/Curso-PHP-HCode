<?php

class Gafanhoto extends Pessoa {
  private $login;
  private $totAssistido;

  public function __construct($nome, $idade, $sexo, $login)
  {
    parent::__construct($nome, $idade, $sexo);
    $this->login = $login;
    $this->totAssistido = 0;
  }

  public function setLogin($login) {
    $this->login = $login;
  }

  public function getLogin() {
    return $this->login;
  }

  public function setTotAssistido($assistido) {
    $this->totAssistido = $assistido;
  }

  public function getTotAssistido() {
    return $this->totAssistido;
  }

  public function viuMaisUm() {
    $this->totAssistido ++;
  }
}

?>