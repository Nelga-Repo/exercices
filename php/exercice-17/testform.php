<?php 
    if(isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['date'])){


        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors[] = 'Votre adresse email n\'est pas correct';
        }

        if(!preg_match('/^[a-zA-Z0-9\-_]{2,25}$/', $_POST['pseudo'])){
            $errors[] = 'Votre pseudo n\'est pas correct';
        }

        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,25})$/', $_POST['password'])){
            $errors[] = 'Votre mot de passe n\'est pas correct';
        }

        if(!preg_match('/(^(((0[1-9]|1[0-9]|2[0-8])[\/\-](0[1-9]|1[012]))|((29|30|31)[\/\-](0[13578]|1[02]))|((29|30)[\/\-](0[4,6,9]|11)))[\/\-](19|[2-9][0-9])\d\d$)|(^29[\/\-]02[\/\-](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)/',$_POST['date'])){
            $errors[] = 'Votre date de naissance est incorrect.';
        }

        if(!isset($errors)){
            $success = 'Votre compte à bien était créé';
        }

    }
?>