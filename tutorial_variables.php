<?php  #php language open

echo ("hello world!");

function number_sum($x, $y) {
    $result = $x + $y; 
    return $result;
}



$res1 = number_sum (5, 2); 
number_sum (2, 5);

echo number_sum(3, 2);
echo number_sum(2, 6);

function explain_understanding($abc, $cba) {
    $understand = $cba +  $abc;
    return $understand;
}

echo explain_understanding(5, 3);
echo explain_understanding(10, 20);


#debug pretty
echo '<pre>';
var_dump($variable_name);
echo '</pre>';

    include_once('config.php'); #Der Code lädt die Datenbank-Zugangsdaten aus der Datei config.php
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); #stellt dann mit diesen Daten eine Verbindung zur MySQL-Datenbank her.

$sql = "SELECT * FROM `store_types`"; #Dieser Code holt alle Einträge aus der Tabelle store_types in der Datenbank.
$result = $db->query($sql); #speichert das Ergebnis in der Variable $result.


#php close  ↓
?> 