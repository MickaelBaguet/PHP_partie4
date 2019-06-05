<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 7</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 7 - PHP</h1>
        <h3>Partie 4</h3>
        <p class="lead">TEn allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
      // Définition de la fonction
      function test($age, $gender) {
        if ($gender == 'femme') {
          if ($age < 18) {
            return 'Vous êtes une femme et vous êtes mineur.';
          } else {
            return 'Vous êtes une femme et vous êtes majeur.';
          }
        } else {
          if ($age < 18) {
            return 'Vous êtes un homme et vous êtes mineur.';
          } else {
            return 'Vous êtes un homme et vous êtes majeur.';
          }
        }
      }
      // Appel de la fonction
      $age = rand(7, 77);
      $index = rand(0, 1);
      $genre = array('homme', 'femme');
      // $genre[$index] pour gérer l'aléatoire pour les genres
      $res = test($age,$genre[$index]);
    ?>
    <p>Premier paramètre = "<?= $age ?>", deuxième paramètre = "<?= $genre[$index] ?>"</p>
    <p>Résultat : <?= $res ?></p>
  </div>
</body>
</html>
