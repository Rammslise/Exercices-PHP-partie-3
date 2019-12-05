<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les boucles, exercice 5</title>
</head>
<!--En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.-->
<body>

    <?php
    // on utilise la valeur for (1er initialisation, 2ème condition, 3ème incrémentation).
    // for = while, mais regroupe tout en une ligne.
    for ($start = 1; $start <= 15; $start++)
    {
      ?>
      <p>
        <?php
        //utilisation des conditions if...else pour voir si les variables sont bien prises en compte.
        echo $start.' On y arrive presque';
      }
      ?>
    </p>

</body>
</html>
