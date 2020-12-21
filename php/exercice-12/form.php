<?php
$inputName = '<input type="text" name="name" placeholder="Votre nom">';
$inputFirstName = '<input type="text" name="firstname" placeholder="Votre prénom">';
$inputAge = '<input type="number" name="age" placeholder="Votre age">';
$submit = '<input type="submit" value="OK">';
$nameCheck = false;
$firstNameCheck = false;
$ageCheck = false;
?>

<?php
  if(isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['age'])) {
    if (mb_strlen($_POST['name']) < 2 || mb_strlen($_POST['name']) > 50) {
      echo "Votre nom doit être supérieur à 2 et inférieur à 50 caractères.";
    } if (mb_strlen($_POST['firstname']) < 2 || mb_strlen($_POST['firstname']) > 50) {
      echo "Votre prénom doit être supérieur à 2 et inférieur à 50 caractères.";
    } if ($_POST['age'] < 1 || $_POST['age'] > 150) {
      echo "Votre age doit être supérieur à 0 et inférieur à 150.";
    } if () {
      $nameCheck = true;
      $firstNameCheck = true;
      $ageCheck = true;
    } if ($nameCheck == true || $firstNameCheck == true || $ageCheck == true) {
      echo 'Bienvenue ' . htmlspecialchars($_POST['name']) . '.Votre nom est ' . htmlspecialchars($_POST['name']) . ' et vous avez ' . htmlspecialchars($_POST['age']) . ' ans.';
    }
  }
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form class="contact" action='form.php' method="POST">
      <?php
        if (isset($_POST['name']) || isset($_POST['firstname']) || isset($_POST['age'])) {

        } if ($nameCheck == false || $firstNameCheck == false || $ageCheck == false) {
          echo $inputName;
          echo $inputFirstName;
          echo $inputAge;
          echo $submit;
        } else {

        }
      ?>
    </form>
  </body>
</html>
