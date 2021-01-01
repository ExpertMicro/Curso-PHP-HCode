<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
    <?php
      require_once("config.php");
      //require_once("Pessoa.php");
      //require_once("Livro.php");

      $p[] = new Pessoa("Pedro", 22, "M");
      $p[1] = new Pessoa("Maria", 40, "F");

      $l[0] = new Livro("Dom Casmurro", "Assis", 300, $p[0]);
      $l[1] = new Livro("Democracia o Deus que falhou", "Hoppe", 400, $p[1]);

      $l[0]->abrir();
      $l[0]->folhear(80);
      $l[0]->avancaPag();
      $l[0]->detalhes();
    ?>
  </body>
</html>