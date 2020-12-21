<?php 
    if (isset($_POST['name']) && isset($_POST['color']) && isset($_POST{'weight'}) && isset($_POST['other'])){

        if (mb_strlen($_POST['name']) < 2) {
            $errors[] = 'Le nom du fruit n\'est pas bon';
        }

        if (mb_strlen($_POST['color']) < 2 || mb_strlen($_POST['color']) > 25) {
            $errors[] = 'La couleur du fruit n\'est pas bonne';
        }

        if (mb_strlen($_POST['weight']) < 2 || mb_strlen($_POST['weight']) > 25) {
            $errors[] = 'Le poid de votre fruit n\'est pas bon';
        }

        if (mb_strlen($_POST['other']) < 2 || mb_strlen($_POST['other']) > 25) {
            $errors[] = 'Vous n\'avez pas rempli les conditions spéciales';
        }

        if (!isset($errors)) {
            $sucess = 'Votre formulaire est bien reçu';

            try {
                $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', '');
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die('Problème de base de données : ' . $e->getMessage());
            }

            $submitFruits = $bdd->prepare("INSERT INTO fruits(name, color, weight, other) VALUES(?, ?, ?, ?)");
            $submitFruits->execute([
                $_POST['name'],
                $_POST['color'],
                $_POST['weight'],
                $_POST['other'],
            ]);

            $submitFruits->CloseCursor();
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Ajoutez un fruit</h1>
    <?php 
        if(isset($errors)) {
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }
        }

        if(isset($sucess)) {
            echo '<p>' . $sucess . '</p>';
        }
    ?>
    <form action="index.php" method="POST">
        <input type="text" name="name" placeholder="Nom du fruit">
        <input type="text" name="color" placeholder="Couleur">
        <input type="text" name="weight" placeholder="Poid du fruit">
        <input type="text" name="other" placeholder="Autres">
        <input type="submit" value="Valider">
    </form>
</body>
</html>