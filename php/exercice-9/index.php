<!-- PHP Function and Variables -->

<?php 
    $fruits = ["Orange", "Fraise", "Banane", "Poire"];
    $test = "Ma phrase";
    
    function print_rv2($print) {
        echo  "<pre>";
        print_r ($print);
        echo  "</pre>";
    };

    function getTTCPrice($ttcprice, $tvaValue) {
        $ttcprice = $ttcprice + $ttcprice * $tvaValue / 100;
        echo $ttcprice;
    };
?>

<!-- HTML PAGE -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>
<body>
    <?php
        print_rv2($test);
        print_rv2($fruits);
        getTTCPrice('34', '20');
    ?>
</body>
</html>