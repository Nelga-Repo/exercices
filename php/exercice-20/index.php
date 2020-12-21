<?php 
    // Définir les valeurs par défault des champs
    $replaceEmail = '';
    $replacePassword = '';
    $invalid = '';

    // Vérification de l'envoi du formulaire
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST{'passwordCheck'})){
        
        // Sécurisation du mot de passe 
        $password = $_POST['password'];
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

        // Connexion à la BDD
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Problème de base de données : ' . $e->getMessage());
        }
        
        // Vérification de la validité de l'email et d'un éventuel existant dans la BDD
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $checkEmail = $bdd->prepare("SELECT * FROM users_login WHERE email = ?");
            $checkEmail->execute(array($_POST['email']));
            $responseEmailCheck = $checkEmail->rowCount();

            // Si le nombre de colonne qui contient l'email n'est pas inférieur à 1
            if (!$responseEmailCheck < 1) {
                $errors[] = 'Ce compte existe déjà';
            }

        // Sinon affichage du message d'erreur    
        } else {
            $errors[] = 'Votre adresse email n\'est pas bonne';
        }

        // Vérification du minimum
        if (mb_strlen($_POST['password']) < 8) {
            $errors[] = 'Votre mot de passe est trop petit';
        }
        // Vérification du maximum
        if (mb_strlen($_POST['password']) > 60) {
            $errors[] = 'Votre mot de passe est trop grand';
        }
        // Vérification des chiffres
        if (!preg_match("#[0-9]+#", $_POST['password'])) {
            $errors[] = 'Votre mot de passe doit contenir au moins 1 chiffre';
        }
        // Vérification des minuscules
        if (!preg_match("#[a-z]+#", $_POST['password'])) {
            $errors[] = 'Votre mot de passe doit contenir au moins 1 lettre minuscule';
        }
        // Vérification des majuscules
        if (!preg_match("#[A-Z]+#", $_POST['password'])) {
            $errors[] = 'Votre mot de passe doit contenir au moins 1 lettre majuscule';
        }
        // Vérification des caractères spéciaux
        if (!preg_match("#\W+#", $_POST['password'])) {
            $errors[] = 'Votre mot de passe doit contenir au moins un caractère spécial';
        }
        // Vérification de la confirmation du mot de passe
        if ($_POST['password'] != $_POST['passwordCheck']) {
            $errors[] = 'Votre confirmation de mot de passe ne correspond pas';
        }

        // Si formulaire est complet et bon, préparation du message de validation et des de la date du jour.
        if (!isset($errors)) {
            $sucess = 'Merci pour votre inscription';
            $dateRegister = date("Y-m-d H:i:s");

            // Selection de la table dans la BDD et préparation à l'envoi du champ
            $addUser = $bdd->prepare("INSERT INTO users_login(id, email, password, register_date) VALUES(0, ?, ?, ?)");
            // Envoi des données dans la BDD avec un execute
            $addUser->execute([$_POST['email'],$passwordHashed,$dateRegister,]);
            // Fermeture de la requête
            $addUser->CloseCursor();
        }

        // Si formulaire contient des erreurs, sauvegarde des champs
        if (isset($errors)) {
            $replaceEmail = $_POST['email'];
            $replacePassword = $_POST['password'];
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Inscription</title>
</head>
<body>
    <main>
        <!-- Affichage en cas d'erreurs -->
        <?php 
            if(isset($errors)) {
                echo '<div class="fail">';
                    foreach ($errors as $error) {
                        echo $error . '<br>';
                    }
                echo '</div>';
            }
        ?>
        <!-- Affichage en cas de réussite -->
        <?php
            if(isset($sucess)) {
                echo '<div class="sucess">';
                echo $sucess;
                echo '</div>';
            }
        ?>
        <form action="index.php" method="POST" class="form">
            <input type="text" name="email" placeholder="Votre adresse email" class="input" value="<?php echo $replaceEmail ?>">
            <input type="password" name="password" placeholder="Votre mot de passe" class="input" value="<?php echo $replacePassword ?>">
            <input type="password" name="passwordCheck" placeholder="Confirmation du mot de passe" class="input">
            <input type="submit" value="Inscription" class="submit">
        </form>
    </main>
</body>
</html>