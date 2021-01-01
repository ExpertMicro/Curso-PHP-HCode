<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
    <?php
      require_once("config.php");
      
      $v[0] = new Video("Aula 1 de POO");
      $v[1] = new Video("Aula 12 de PHP");
      $v[2] = new Video("Aula 15 de HTML5");

      $g[0] = new Gafanhoto("Oziel", 27, "M", "zi");
      $g[1] = new Gafanhoto("Huskar", 40, "M", "Aegedis");

      $vis[0] = new Visualizacao($g[0], $v[2]);
      $vis[1] = new Visualizacao($g[0], $v[0]);

      $vis[0]->avaliar();
      $vis[1]->avaliarPorc(85);
      print_r($vis);
      
    ?>
  </body>
</html>