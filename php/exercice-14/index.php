<?php
  $error2 = "";
  $error = "";
  $bodyColor = "<body style= \"background-color:" . "#FFF" . "\">";
?>

<?php
  // Set du body de base.
   if(isset($_COOKIE['userColor'])) {
     $bodyColor = "<body style= \"background-color:" . htmlspecialchars($_COOKIE['userColor']) . "\">";
   }

   // Vérification de l'existance des variables et de la restriction des caractères.
   if (isset($_POST['color']) || isset($_POST['time'])) {
     if (mb_strlen($_POST['color']) < 2 || mb_strlen($_POST['color']) > 10) {
       $error = "<p>Votre couleur n'est pas bonne</p>";
     }
     // Vérification de la variable de l'input temps.
     else {
       if (isset($_POST['time'])) {
         // Vérification de la valeur, chiffre seulement.
         if (ctype_digit($_POST['time'])) {
           $color = $_POST['color'];
           $time = $_POST['time'];
           $bodyColor = "<body style= \"background-color:" . $color . "\">";
           setcookie('userColor', $color, time() + $time, null, null, false, true);
         } else if (!ctype_digit($_POST['time']) && !empty($_POST['time'])) {
           $error2 = "Votre temps n'est pas bon";
         }
         // Si le temps n'est pas un chiffre ou vide
         else {
           $color = $_POST['color'];
           $bodyColor = "<body style= \"background-color:" . $color . "\">";
           setcookie('userColor', $color, time() + 3600, null, null, false, true);
         }
       }
     }
   }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php echo $bodyColor ?>
  <?php echo $error ?>
  <?php echo $error2 ?>
    <form class="color" action="index.php" method="post">
      <input type="text" name="color" placeholder="Votre couleur">
      <input type="text" name="time" placeholder="Définir un temps">
      <input type="submit" value="Valider">
    </form>
  </body>
</html>
