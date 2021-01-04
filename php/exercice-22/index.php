<?php
    // Vérification du formulaire 
    if (isset($_POST['email']) && isset($_FILES['photo'])) {

        // Définition des variables
        $filename = $_FILES['photo']['name'];
        $timestamp = time();
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $number = random_int(10000, 999999);
        $rename = md5($timestamp . $number);

        // Vérification de l'adresse email
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Votre adresse n\'est pas bonne';
        }

        // Vérification de la taille de l'image
        if ($_FILES['photo']['size'] > 300000 || $_FILES['photo']['error'] == 1 || $_FILES['photo']['error'] == 2) {
            $errors[] = 'Votre image est trop grande';
        }

        $mime = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $_FILES['photo']['tmp_name']);

        // Mise en place des codes d'erreurs
        if ($_FILES['photo']['error'] == 3) {
            $errors[] = "L'envoi de votre fichier à était interrompu";
        }

        if ($_FILES['photo']['error'] == 4) {
            $errors[] = "Vous n'avez pas de fichier dans le formulaire";
        }

        if ($_FILES['photo']['error'] == 6) {
            $errors[] = "Une erreur serveur est survenu";
        }

        if ($_FILES['photo']['error'] == 7) {
            $errors[] = "Une erreur serveur est survenu";
        }

        if ($_FILES['photo']['error'] == 8) {
            $errors[] = "Une erreur serveur avec php";
        }

        // Si pas d'erreur, envoi du tout
        if (!isset($errors)) {

            if ($mime == 'image/png' || $mime == 'image/jpg' || $mime == 'image/gif') {
                echo 'Votre fichier est bien stocké';
                move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . $rename . '.' . $ext);

            } else {
                $errors[] = 'Votre fichier doit être de type .jpg, .png, .gif';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi de fichier</title>
</head>
<body>
        <!-- Affichage en cas d'erreurs -->
        <?php 
            if(isset($errors)) {
                echo '<div>';
                    foreach ($errors as $error) {
                        echo $error . '<br>';
                    }
                echo '</div>';
            }
        ?>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="2048000">
        <input type="text" name="email" placeholder="Votre adresse email">
        <input type="file" name="photo" accept="image/jpeg, image/png">
        <input type="submit">
    </form>
</body>
</html>