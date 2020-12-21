<?php 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Problème de base de données : ' . $e->getMessage());
}   
    // On va chercher le tableau
    $response = $bdd->query('SELECT * FROM fruits');
    // On va chercher l'éléement dans le tableau
    $fruits = $response->fetch(PDO::FETCH_ASSOC);
    // On ferme la requête
    $response->closeCursor();
    
    // On utilise l'élément qu'on à récupéré dans le tableau. 
    echo 'La couleur du fruit ' . $fruits['name'] . ' est ' . $fruits['color'];
?>


<?php 
    if ($name > 250 || $name < 50) {
        echo 'Votre nom n\'est pas défini correctement.';
    }
?> 