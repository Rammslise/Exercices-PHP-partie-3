<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les boucles, exercice 8</title>
</head>
<!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.-->
<body>
  <?php
  for ($start = 200; $start >= 0; $start-= 12)
  {
    ?>
    <p>
      <?= $start.' Enfin !!!';
      // On met toujours {} fermente dans des balises php.
    }
    ?>
  </p>
</body>
</html>
