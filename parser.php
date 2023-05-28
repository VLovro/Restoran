<?php

$xml = simplexml_load_file('database.xml');

$rezerviraniTermini = [];

foreach ($xml->reservation as $reservation) {
    $dateTime = (string) $reservation->datum;
    $rezerviraniTermini[] = $dateTime;
}

$Termini = [
    '2023-05-17 13:00:00', '2023-05-17 14:00:00', '2023-05-17 15:00:00', '2023-05-17 16:00:00', '2023-05-17 17:00:00',
    '2023-05-17 18:00:00', '2023-05-17 19:00:00', '2023-05-17 20:00:00', '2023-05-17 21:00:00', '2023-05-17 22:00:00',
    '2023-05-18 13:00:00', '2023-05-18 14:00:00', '2023-05-18 15:00:00', '2023-05-18 16:00:00', '2023-05-18 17:00:00',
    '2023-05-18 18:00:00', '2023-05-18 19:00:00', '2023-05-18 20:00:00', '2023-05-18 21:00:00', '2023-05-18 22:00:00',
    '2023-05-19 13:00:00', '2023-05-19 14:00:00', '2023-05-19 15:00:00', '2023-05-19 16:00:00', '2023-05-19 17:00:00',
    '2023-05-19 18:00:00', '2023-05-19 19:00:00', '2023-05-19 20:00:00', '2023-05-19 21:00:00', '2023-05-19 22:00:00',
];

$DostupniTermini = array_diff($Termini, $rezerviraniTermini);



?>

<!DOCTYPE html>
<html>
<head>
    <title>Dostupni Termini</title>
</head>
<body>
    <h1>Dostupni termini:</h1>
    <ul>
        <?php foreach ($DostupniTermini as $dateTime): ?>
            <li><?php echo $dateTime; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
