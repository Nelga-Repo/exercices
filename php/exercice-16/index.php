<!-- 
    Traitement d'un formulaire
    -> Appel des variables avec un if
    -> blocs de verification dans le if des variables
    -> Si pas d'erreur avec un check du tableau error 

    Traitement d'un formulaire
    -> Appel des variables avec un if 
    -> Blocs de vérification dans le if des variables 
    -> Si pas d'erreur avec un check du tableau error 
-->
<?php
    if () {
        # code...
    }

?>

<?php 
    // Affichage du formulaire en début
    $form = '
        <form action="index.php" method="post">
            <input type="text" name="age" placeholder="Votre Age">
            <input type="text" name="email" placeholder="Votre email">
            <input type="text" name="url" placeholder="Votre site">
            <input type="submit">    
        </form>
        ';

    // Déclaration des variables
    $age = '';
    $email = '';
    $url = '';

    // Vérification de l'envoi du formulaire
    if (isset($_POST['age']) || isset($_POST['email']) || isset($_POST['url'])) {

        // Déclaration des valeurs de champs dans des variables pour vérification
        $age = htmlspecialchars($_POST['age']);
        $email = htmlspecialchars($_POST['email']);
        $url = htmlspecialchars($_POST['url']);

        // Vérification des champs 
        if (filter_var($age, FILTER_VALIDATE_INT) && filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($url, FILTER_VALIDATE_URL)) {

            // Réussite de la vérification, déclaration du message success.
            $success = "Vos données sont bien enregistré";
            $form = '';
        } else {

            // Echec de la vérification, reprise des valeurs du champs et déclaration du message d'erreurs.
            $error = "Erreur";
            $form = '
                <form action="index.php" method="post">
                    <input type="text" name="age" placeholder="Votre Age" value="'.($_POST['age']).'">
                    <input type="text" name="email" placeholder="Votre email" value="'.($_POST['email']).'">
                    <input type="text" name="url" placeholder="Votre site" value="'.($_POST['url']).'">
                    <input type="submit">    
                </form>
                ';
        }
    }
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php 
        if (isset($success)) {
            echo $success;
        } if (isset($error)) {
            echo $error;
        }
    ?>
    <?php echo $form ?>
</body>
</html>