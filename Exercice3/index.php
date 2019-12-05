<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les boucles, exercice 3</title>
</head>
<!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieure ou égale à 10 :
multiplier la première variable avec la deuxième
afficher le résultat
décrémenter la première variable -->
<body>
  <?php
  $loop = 100;
  $number = rand (1,100);
  while ($loop > 10) {
    ?>
    <p>
      <?= 'Avec le nombre '.$number.', le résultat est '.$loop * $number ?>
    </p>
    <?php
    $loop--;
  } ?>
</body>
</html>
