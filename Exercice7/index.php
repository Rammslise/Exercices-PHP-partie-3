<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les boucles, exercice 7</title>
</head>
<!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.-->
<body>
  <?php
  // ici on définit l'incrémentation '+='' (le nombre souhaité)
  for ($start = 1; $start <= 100; $start+= 15) {
    ?>
    <p>
      <?= $start.' On tient le bon bout.';
    }
    ?>
  </p>
</body>
</html>
