<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 8</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 8 - PHP</h1>
        <h3>Partie 4</h3>
        <p class="lead">Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
        // Définition de la fonction
        function add($nbr1, $nbr2, $nbr3) {
          return $nbr1+$nbr2+$nbr3;
        }
        // Appel de la fonction
        $res = add(9,8,7);
        echo '<p>Premier paramètre = 9, deuxième paramètre = 8, troisième paramètre = 7</p>';
        echo '<p>Résultat : '.$res.'</p>';
      ?>
  </div>
</body>
</html>
