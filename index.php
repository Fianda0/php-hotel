<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>php-hotel</title>
</head>

<body>
    <h1>Php-Hotel</h1>

    <!-- <ul>
        <?php
        foreach ($hotels as $hotel) {
            // echo '<li>' . $hotel['name'] . '</li>';
            foreach ($hotel as $key => $valore) {
                echo '<li>' . $key . ': ' . $valore . '</li>';
            }
        }
        ?>
    </ul> -->

    <table>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto</th>
            <th>Diztanza dal centro</th>
        </tr>
        <?php
        foreach ($hotels as $hotel) {
            echo '<tr>';
            foreach ($hotel as $proprieta) {
                echo '<td>' . $proprieta . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>