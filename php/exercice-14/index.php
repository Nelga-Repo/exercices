<?php
  $error = "";
  $bodyColor = "<body style= \"background-color:" . "#FFF" . "\">";
?>

<?php
   if(isset($_COOKIE['color'])) {
     $bodyColor = "<body style= \"background-color:" . $_COOKIE['userColor'] . "\">";
   }

   if (isset($_POST['color'])) {
     if (mb_strlen($_POST['color']) < 2 || mb_strlen($_POST['color']) > 10) {
       $error = "<p>Votre couleur n'est pas bonne</p>";
     } else {
       $color = $_POST['color'];
       $bodyColor = "<body style= \"background-color:" . $color . "\">";
       setcookie('userColor', $color, time() + 3600, null, null, false, true);
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
    <form class="color" action="index.php" method="post">
      <input type="text" name="color">
      <input type="submit" value="Valider">
    </form>
  </body>
</html>
