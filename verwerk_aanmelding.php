<?php
$naam = $_POST['naam'];

// Open het bestand voor het toevoegen van de nieuwe naam
$bestand = fopen('aangemelde_personen.txt', 'a');

// Schrijf de naam naar het bestand
fwrite($bestand, $naam . "\n");

// Sluit het bestand
fclose($bestand);

// Stuur de gebruiker door naar de bedankpagina
header('Location: bedankt.php');
exit;
?>
