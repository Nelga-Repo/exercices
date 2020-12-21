<?php
        if(isset($errors)){
            foreach($errors as $error){
                echo '<p>' . $error . '</p>';
            }
        }

        if(isset($success)){
            echo '<p>' . $success . '</p>';
        } 
        
        else {
            ?>
                <form action="index.php" method="POST">
                    <input type="text" name="email" placeholder="Votre email">
                    <input type="text" name="pseudo" placeholder="Votre pseudo">
                    <input type="text" name="password" placeholder="Votre mot de passe">
                    <input type="text" name="date" placeholder="Votre date de naissance">
                    <input type="submit" value="envoyer">
                </form>
            <?php
        }
    ?>