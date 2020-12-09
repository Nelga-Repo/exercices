<!-- PHP VARIABLES -->

<?php 
    $admin = true;
?>

<?php 
        if ($admin) {
            $showTrue = "block";
            $showFalse = "none";
        } else {
            $showFalse= "block";
            $showTrue = "none";
        }
?>

<!-- HTML PAGE -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <style>
        #true {display: <?php echo $showTrue ?>;}
        #false {display: <?php echo $showFalse ?>;}
    </style>
</head>
<body>
    <header>
        <div id="true">
            <h1>Bienvenue admin</h1>
            <a href="">Lien admin</a>
        </div>
        <div id="false">
            <h1>Vous n'êtes pas admin</h1>
        </div>
    </header>
</body>
</html>