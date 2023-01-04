<?php
// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minut = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;
?>