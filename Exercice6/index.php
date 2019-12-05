<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les boucles, exercice 6</title>
</head>
<!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. -->
<body>
    <?php
    for ($start = 20; $start >= 0; $start--)
    {
      ?>
    <p>
      <?= $start.' C\'est presque bon';
    }
    ?>
  </p>
</body>
</html>
