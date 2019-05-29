<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 5</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 5 - PHP</h1>
        <h3>Partie 4</h3>
        <p class="lead">Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
        // Définition de la fonction
        function concat($nbr, $str) {
          return "$nbr $str";
        }
        // Appel de la fonction
        $res = concat(9,'neuf');
        echo '<p>Premier paramètre = 9, deuxième paramètre = "neuf"</p>';
        echo '<p>Résultat : '.$res.'</p>';
      ?>
  </div>
</body>
</html>
