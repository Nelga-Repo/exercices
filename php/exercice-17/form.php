Exercice sur les expressions régulières. Les réponses possibles sont soit           TRUE, soit FALSE

"Le chat est dans l'arbre"				/chat/					Résultat: TRUE      V
"L'arbre n'est pas sur le chat"			/chien/					Résultat: FALSE     V
"Le chien mange des croquettes"			/Chien/					Résultat: FALSE     V
"La pomme est rouge"					/POMME/i				Résultat: TRUE      V
"La banane est jaune"					/banane|orange/			Résultat: TRUE      V
"Le chat est dans l'arbre"				/^chat/					Résultat: FALSE     V
"L'arbre n'est pas sur le chat"			/chat$/					Résultat: TRUE      V
"Le chien mange des croquettes!"		/croquettes$/			Résultat: FALSE     V
"La pomme et la poire sont des fruits"	/po[ufi]re/				Résultat: TRUE      V
"La pomme est rouge"					/[aeiouy]$/				Résultat: TRUE      V
"La banane est jaune"					/^[le]$/i				Résultat: TRUE                  X   // it was as moment Sébastien knew he fucked up - MAIS C'ETAIT SUR AUSSI
"Le chat est dans l'arbre 4"			/^[0-9]/				Résultat: TRUE                  X
"L'arbre n'est pas sur le chat"			/[A-Z0-9]$/				Résultat: FALSE     V
"Le chien mange des croquettes"			/[^a-z]/i				Résultat: TRUE      V
"La pomme est rouge"					/z?/					Résultat: FALSE                 X
"La banane est jaune"					/[na]+/					Résultat: TRUE      V
"Le chat est dans l'arbre"				/^[a-z0-9]{0,50}$/i		Résultat: FALSE     V
"1480"									/[0-9]{3}$/				Résultat: FALSE                 X
"45T140"								/^[0-9]{3}/				Résultat: FALSE     V
"blablablabla"							/^(bla){4}$/			Résultat: TRUE      V
"La pomme et la poire sont des fruits"	/^.+$/					Résultat: BRUH..


if(
    isset($_POST['firstname']) &&
    isset($_POST['lastname']) &&
    isset($_POST['age'])
){


    // 2ème étape : bloc des vérifs (1 champ = 1 structure conditionnelle) : consiste pour chaque champ à vérifier qu'il contient bien des données valides

    if(mb_strlen($_POST['firstname']) < 2 || mb_strlen($_POST['firstname']) > 50){
        $errors[] = 'Prénom pas bon !';
    }

    if(mb_strlen($_POST['lastname']) < 2 || mb_strlen($_POST['lastname']) > 50){
        $errors[] = 'Nom pas bon !';
    }

    if(!is_numeric($_POST['age']) || $_POST['age'] < 0 || $_POST['age'] > 150 || !ctype_digit($_POST['age'])){

        $errors[] = 'Age pas bon !';
    }


    // 3ème étape : si le formulaire n'a pas d'erreur, on fait les actions post-formulaire
    if(!isset($errors)){

        // Création du message de succès en mettant la version protégée des données (sinon faille XSS)
        $successMsg = 'Bonjour ' . htmlspecialchars($_POST['firstname']) . ' ' . htmlspecialchars($_POST['lastname']) . ' , tu as ' . htmlspecialchars($_POST['age']) . ' ans !';
    }

}

?>


Dans le body 

<?php

    // Si l'array $errors existe, alors on le parcours avec un foreach et on affiche les erreurs qu'il contient
    if(isset($errors)){
        foreach($errors as $error){
            echo '<p style="color:red;">' . $error . '</p>';
        }
    }

    // Si la variable $successMsg existe, alors on l'affiche, sinon on affiche le formulaire dans le else
    if(isset($successMsg)){

        echo '<p style="color:green;">' . $successMsg . '</p>';

    } else {

        ?>
            <form action="index.php" method="POST">
                <input type="text" placeholder="Prénom" name="firstname">
                <input type="text" placeholder="Nom" name="lastname">
                <input type="text" placeholder="Age" name="age">
                <input type="submit">
            </form>
        <?php

    }

    ?>



