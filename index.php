<?php

include_once __DIR__ . '/classes/Movies.php';

$movies = [
    new Movies("Don't Look Up", "Commedia", "Adam McKay", "2021", "USA", "145"),
    new Movies("Il Lupo e il Leone", "Avventura, Family", "Gilles de Maistre", "2021", "Francia", "99"),
    new Movies("Una Famiglia Vincente", "Drammatico", "Reinaldo Marcus Green", "2021", "USA", "144"),
    new Movies("Aline - La voce dell'amore", "Drammatico, Biografico, Musicale", "Valèrie Lemercier", "2020", "Canada, Francia", "128"),
    new Movies("Belli Ciao", "Commedia", "Gennaro Nunziante", "2022", "Italia", "90")
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>

    <h2>Movies:</h2>

    <?php
    foreach($movies as $movie) {
        echo 
        "<h4>{$movie->titolo}</h4>
        <div> - Genere: {$movie->genere}</div>
        <div> - Regista: {$movie->regista}</div>
        <div> - Anno uscita: {$movie->anno}</div>
        <div> - Paese: {$movie->paese}</div>
        <div> - Durata: {$movie->durata}min</div>";
    }
    ?>
    
    
</body>
</html>