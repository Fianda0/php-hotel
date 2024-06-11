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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-hotel</title>
</head>

<body>
    <h1>Php-Hotel</h1>

    <?php
    foreach ($hotels as $hotel) {
    }
    ?>

    <table>

        <tr>
            <?php
            foreach ($hotel as $key => $valore) {
                echo '<th>' . ucfirst($key) . '</th>';
            }
            ?>
        </tr>

        <?php
        foreach ($hotels as $hotel) {
            echo '<tr>';
            foreach ($hotel as $proprieta) {
                if ($proprieta === false) {
                    $proprieta = ' <i class="fa-solid fa-x"></i> ';
                    echo '<td>' . $proprieta . '</td>';
                } else  if ($proprieta === true) {
                    $proprieta = ' <i class="fa-solid fa-check"></i> ';
                    echo '<td>' . $proprieta . '</td>';
                } else {
                    echo '<td>' . $proprieta . '</td>';
                }
            }
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>