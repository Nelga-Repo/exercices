<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Liste de fruits</h1>
    <ul>
        <li><?php echo "Fraise"?></li>
        <li><?php echo "Banane"?></li>
        <li><?php echo "Poire"?></li>
        <li><?php echo "Abricot"?></li>
        <li><?php echo "Arold"?></li>
    </ul>

    <!-- Ou bien -->

    <?php 
        echo "<ul>
                <li>Fraise</li>
                <li>Banane</li>
                <li>Poire</li>
                <li>Abricot</li>
                <li>Arold</li>
              </ul>"
        ;
    ?>
</body>
</html>