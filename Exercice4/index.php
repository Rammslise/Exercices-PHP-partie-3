<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les boucles, exercice 4</title>
</head>
<!-- Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :
l'afficher
l'incrementer de la moitié de sa valeur -->
<body>
  <?php
  $loop = 1;
  while ($loop < 10) {
    ?>
    <p>
      <?= 'J\'ai couru '.$loop.' km(s) aujourd\'hui.' ?>
    </p>
    <?php
    // $loop += $loop/2 -> incrémenter de la moitié de sa valeur
    $loop=$loop+$loop/2;
  } ?>
</body>
</html>
