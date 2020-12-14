<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display</title>
  </head>
  <body>
    <?php
      if (isset($_GET["name"]) && isset($_GET["email"])) {
        echo "Bienvenue " . $_GET['name'] . " Votre adresse email est : " . $_GET['email'];
      } else {
        echo 'Veuillez passer par le formulaire pour voir cette page';
      }
     ?>
  </body>
</html>
