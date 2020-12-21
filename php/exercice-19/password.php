//    <?php 
//        $password = 'chat';
//        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
//        echo $passwordHash;
//    ?>

<!-- Test dans le cas d'une variable (ex un formulaire) --> 
<?php
    $password = htmlspecialchars($_POST['password']);
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
    echo $passwordHash;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test password Submit</title>
</head>
<body>
    <form action="password.php" method="POST">
        <input type="text" name="user" placeholder="Votre pseudo">
        <input type="password" name="password" placeholder="Votre mot de passe">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>