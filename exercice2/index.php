<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 2</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 2 - PHP</h1>
        <h3>Partie 4</h3>
        <p class="lead">Faire une fonction qui prend en paramètre une chaine de caractères et qui
          retourne cette même chaine.</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
      // Définition de la fonction
      function returnString($string) {
        return $string;
      }
      // Appel de la fonction
      $res = returnString('Bonjour');
      echo 'Valeur retournée par la fonction = '.$res;
    ?>
  </div>
</body>
</html>
