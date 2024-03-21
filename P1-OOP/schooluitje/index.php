<?php

require_once 'schooluitje.php';

echo "<table border='1'>";
echo "<tr><th>Docent</th><th>Leerling</th><th>Klas</th><th>Betaald</th></tr>";

foreach ($schoolreisLijsten as $lijst) {
    foreach ($lijst->getLeerlingLijst() as $entry) {
        echo "<tr>";
        echo "<td>" . $lijst->getDocent()->getNaam() . "</td>";
        echo "<td>" . $entry['leerling']->getNaam() . "</td>";
        echo "<td>" . $entry['leerling']->getKlas() . "</td>";
        echo "<td>" . ($entry['betaald'] ? 'Ja' : 'Nee') . "</td>";
        echo "</tr>";
    }   
}

echo "</table>";