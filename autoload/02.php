<?php 

function incluirClasses($nomeClasse) {
  if(file_exists($nomeClasse .".php") === true) {
    require_once($nomeClasse .".php");
  }
  
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasses) {
  if(file_exists("Abstracts" .DIRECTORY_SEPARATOR. $nomeClasses .".php") === true) {
    require_once("Abstracts" .DIRECTORY_SEPARATOR. $nomeClasses .".php");
  }
});


$carro = new DelRey();
$carro->acelerar(80);

?>