<?php

include_once ("../db/db_connection.php");

#Erstelle ein PHP-Programm, das:
#Ein Array mit den Wochentagen (Montag, Dienstag, ..., Sonntag) enthält.
#Die Wochentage mit einer Schleife alle untereinander ausgibt.
#Am Ende zusätzlich ausgibt, wie viele Elemente das Array hat.


$names = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
$days = [];

for ($i = 0; $i < 7; $i += 1) {
    $days[$names[$i]] = $i; 
}

echo '<pre>';
print_r($days);
echo '</pre>';
 
$current_day = date('l');

foreach ($names as $day) {
    if ($day === $current_day) {
        echo "<b>$day</b><br>";
    } else {
        echo "$day<br>";
    }
}

echo "Total days: " . count($names);