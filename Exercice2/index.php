<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les boucles, exercice 2</title>
</head>
<!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieure à 20 :
multiplier la première variable avec la deuxième
afficher le résultat
incrementer la première variable -->
<body>
  <?php
  $loop = 0;
  // ici rand (1,100) permet de prendre alétoirement un nombre entre 1 et 100
  $number = rand (1,100);
  while ($loop <= 20) {
    ?>
    <p>
      <?php
      // on met la variable $number pour afficher le nombre choisi alétoirement
      echo  'Avec le nombre '.$number.', le résultat est ' .$loop * $number;
      ?>
    </p>
    <?php
    $loop++;
  } ?>
</body>
</html>
