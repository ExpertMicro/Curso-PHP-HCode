<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Oziel Gonçalves");
$cad->setEmail("oziel.silva222@gmail.com");
$cad->setSenha("123456");

$cad->registraVenda();

?>