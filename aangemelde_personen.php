<?php
// Open het bestand met aangemelde personen
$bestand = fopen('aangemelde_personen.txt', 'r');

// Lees de namen en toon ze op het scherm
echo '<h2>Aangemelde Personen:</h2>';
while (!feof($bestand)) {
    $naam = fgets($bestand);
    echo $naam . '<br>';
}

// Sluit het bestand
fclose($bestand);
?>
