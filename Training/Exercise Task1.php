<?php

include_once('../db/db_connection.php');

#1.Eine Liste von 10 zufälligen Ganzzahlen zwischen 1 und 100 generiert.

#for-Schleife: Wird benutzt, um eine Anweisung mehrfach auszuführen.
#$a = 0: Startwert der Schleifenvariable $i.
#$a < 10: Die Schleife läuft solange, wie $i kleiner als 10 ist.
#$i++: Erhöht $a nach jedem Schleifendurchlauf um 1.
# gibt das gesamte array(liste) aus / ähnlich wie var_dump
$zahlen = [];

for ($a = 0; $a < 10; $a +=1) { #

    $zahlen["Nummer $a"] = rand(0, 100); #2. Speichere die zufallszahlen in einem array 
}
asort($zahlen); #3. Das Array sortiert (aufsteigend mit namen).


if (count($zahlen) > 1) {  #4 Die größte und die kleinste Zahl ausgibt - count($zahlen): Gibt die Anzahl der Elemente im Array zurück.
    echo "die kleineste zahl ist: " . min($zahlen) . "<br>"; #min sucht die kleinste zahl im array
    echo "die größte zahl ist: " .  max($zahlen) . "<br>"; #max gibt die größte zahl im array aus
}

#aufgabe 5. Den Durchschnittswert der Zahlen berechnet und ausgibt.

$arrays_gesamt = count($zahlen);
$zahlenwert = 0;

    foreach ($zahlen  as $höhe => $zahlenhöhe) {
        $zahlenwert += $zahlenhöhe;
    }

    echo ($zahlenwert);

    $Zahlendurchschnitt = ($zahlenwert) / $arrays_gesamt;

    echo "<br> Der durschnitt der gewürfelten Zahlen beträgt: " . $Zahlendurchschnitt;


    #Mehrere werte(zahlen) in einem schlüssel(namen)

    $namen = ["David", "Anne-Marie", "steffen", "Jonas", "Sam", "Sabine", "Michael", "doris", "Detlef", "Jules"]; 
    $zahlen2 =[];

    for ($b = 0; $b <10; $b +=1) {
        $zahlen2 [$namen[$b]] = [rand(0,100), rand(0, 100), rand(0,100)];
    }

    #$zahlen["Nummer $a"] = rand();	Wert: eine einzelne Zahl
#   $zahlen2["Nummer $b"] = [rand(), rand()];	Wert: ein Array mit mehreren Zahlen (klammern beachten)

    $summe_erster_wert = 0; #jeder wert muss initialisiert werden
    $summe_zweiter_wert = 0;
    $summe_dritter_wert = 0;
    $anzahl = 0;

    foreach ($zahlen2 as $zahlenwerte) {
        $summe_erster_wert += $zahlenwerte[0]; # (0) greift nur auf den ersten wert zu >>>[rand(0,100)<<<, rand(0, 100)];
        $summe_zweiter_wert += $zahlenwerte[1];
        $summe_dritter_wert += $zahlenwerte[2];    
        $anzahl ++; #keine zweite anzahl gebraucht da  wert 1 + 2 die selbe anzahl an zahlen haben
    }

$Zahlendurchschnitt = $summe_erster_wert / $anzahl;
echo "<br> Der Durchschnitt des ersten würfels beträgt:   " . round($Zahlendurchschnitt); 
$zahlendurchschnitt2 = $summe_zweiter_wert / $anzahl;
echo "<br> Der durchschnitt des zweiten würfels beträgt:   " . round($zahlendurchschnitt2);
$zahlendurchschnitt3 =$summe_dritter_wert /$anzahl;
echo "<br> Der durcshschnitt des dritten würfels beträgt:   " . round($zahlendurchschnitt3);


#HTML tabelle mit hilfe von ChatGPT ( nicht selbst geschrieben)


echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Name</th><th>Würfel 1</th><th>Würfel 2</th><th>Würfel 3</th></tr>";

foreach ($zahlen2 as $nummer => $zahlenwerte) {
    echo "<tr>";
    echo "<td>$nummer</td>";                // Name der Nummer
    echo "<td>{$zahlenwerte[0]}</td>";       // Wert 1
    echo "<td>{$zahlenwerte[1]}</td>";       // Wert 2
    echo "<td>{$zahlenwerte[2]}</td>";       // Wert 3
    echo "</tr>";
}

echo "</table>";

# Tabelle mithilfe von namen vervollständigen s. $namen + line 48
