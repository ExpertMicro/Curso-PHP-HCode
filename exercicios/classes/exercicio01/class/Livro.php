<?php

require_once("config.php");
//require_once("Pessoa.php");
//require_once("Publicacao.php");

class Livro implements Publicacao {
  private $titulo;
  private $autor;
  private $totPaginas;
  private $paginaAtual;
  private $aberto;
  private $leitor;

  function __construct($titulo, $autor, $totPaginas, $leitor)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totPaginas = $totPaginas;
    $this->leitor = $leitor;
    $this->aberto = false;
    $this->paginaAtual = 0;
  }

  public function setTitulo($titulo) {
    $this->titulo = $titulo;
  }

  public function getTitulo() {
    return $this->titulo;
  }

  public function setAutor($autor) {
    $this->autor = $autor;
  }

  public function getAutor() {
    return $this->autor;
  }

  public function setTotPaginas($totPaginas) {
    $this->totPaginas = $totPaginas;
  }

  public function getTotPaginas() {
    return $this->totPaginas;
  }

  public function setPaginaAtual($paginaAtual) {
    $this->paginaAtual = $paginaAtual;
  }

  public function getPaginaAtual() {
    return $this->paginaAtual;
  }

  public function setAberto($aberto) {
    $this->aberto = $aberto;
  }

  public function getAberto() {
    return $this->aberto;
  }

  public function setLeitor($leitor) {
    $this->leitor = $leitor;
  }

  public function getLeitor() {
    return $this->leitor;
  }

  public function abrir() {
    $this->aberto = true;
  }

  public function fechar() {
    $this->aberto = false;
  }

  public function avancaPag()
  {
    $this->paginaAtual++;
  }

  public function voltaPag()
  {
    $this->paginaAtual--;
  }

  public function folhear($p)
  {
    if($p > $this->totPaginas) {
      $this->paginaAtual = 0;
    }
    else {
      $this->paginaAtual = $p;
    }
  }

  public function detalhes() {
    
    echo "<pre> Livro " . $this->titulo . " escrito por " . $this->autor;
    echo "<br> Páginas: " . $this->totPaginas . " atual: " . $this->paginaAtual;
    echo "<br> sendo lido por " . $this->leitor->getNome() . "</pre>";
  }
}



?>