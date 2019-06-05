<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 4</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 4 - PHP</h1>
        <h3>Partie 4</h3>
        <p class="lead">Faire une fonction qui prend en paramètre deux nombres.
          La fonction doit retourner :
          Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
          Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
          Les deux nombres sont identiques si les deux nombres sont égaux
        </p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
      // Définition de la fonction
      function comparNbr($nbr1, $nbr2) {
        if ($nbr1 > $nbr2) {
          return 'Le premier nombre est plus grand.';
        } elseif ($nbr1 < $nbr2) {
          return 'Le premier nombre est plus petit.';
        } else {
          return 'Les deux nombres sont identiques.';
        }
      }
      // Appel de la fonction
      $nb1 = rand(1,10);
      $nb2 = rand(1,10);
      $res = comparNbr($nb1,$nb2);
    ?>
    <p>Premier paramètre = <?= $nb1 ?>, deuxième paramètre = <?= $nb2 ?></p>
    <p>Résultat de la fonction : <?= $res ?></p>
  </div>
</body>
</html>
