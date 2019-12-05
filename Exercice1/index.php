<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les boucles, exercice 1</title>
</head>
<!-- Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :
l'afficher
l'incrementer -->
<body>
  <!-- Une boucle, permet de répéter des instructions plusieurs fois, c'est un gain de temps
  Quel que soit le type de boucle (while ou for), il faut indiquer une condition.
  Tant que la condition est remplie, les instructions sont réexécutées.
  Dès que la condition n'est plus remplie, on sort de la boucle -->
    <?php
    // ici on donne la valeur 0 à la variable loop (boucle)
    $loop = 0;
    //TANT QUE $loop est inférieur ou égal à 10.
    while ($loop <= 10)
    {
      ?>
      <p>
        <?= 'Voici le(s) n° '.$loop ?>
      </p>
      <?php
      //incrémentation du chiffre pour arriver à 10.
      $loop++; ?>
    <?php } ?>
</body>
</html>
