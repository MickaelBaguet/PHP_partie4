<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 3</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 3 - PHP</h1>
        <h3>Partie 4</h3>
        <p class="lead">Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
    // Définition de la fonction
    function concatString($str1, $str2) {
      return $str1.$str2;
    }
    // Appel de la fonction
    $res = concatString("Bonjour ","tout le monde!");
    echo "<p>Premier paramètre = 'Bonjour', deuxième paramètre = 'tout le monde!'</p>";
    echo "<p>Valeur retournée par la fonction = $res</p>";
    ?>
  </div>
</body>
</html>
