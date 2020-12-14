<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>
<body>
    <?php
      setlocale(LC_TIME, "fr_FR.utf8");
      $date = new DateTime('2004-04-16 12:00:00');
      $date->add(new DateInterval('P435D'));
      echo $date->format('l d F Y G:i:s');
      echo '<br>';
    ?>
    <?php
      setlocale(LC_TIME, "fr_FR.utf8");
      $Date = "2004-04-16 12:00:00";
      echo date('l d F Y G:i:s', strtotime($Date. ' + 435 days'));
    ?>
</body>
</html>
