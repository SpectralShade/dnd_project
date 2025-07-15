<?php

include_once('../db/db_connection.php');

$name = "steffen";
$age = 32;
$gamer = true;
$salary = 4232.75;

#String: Eine Zeichenkette, eingeschlossen in einfache oder doppelte Anführungszeichen.
$greeting = "Hello, World!";

#Integer: Eine ganze Zahl (positiv oder negativ), ohne Dezimalstellen.
$year = 2024;

#Float (oder Double): Eine Zahl mit Dezimalpunkt oder im Exponentialformat.
$price = 19.99;

#Boolean: Repräsentiert true oder false, oft in Bedingungen verwendet.
$has_exam = true;

$colours = array("red", "blue", "green", "yellow");

define("SITE_NAME", "My first own website.");
define("PAYMENT", "100€");
echo "Welcome to " . SITE_NAME  . " Payment on me: " . PAYMENT;

$item = "laptop";
$quantity = 3;
$on_stock = true;
$prod_price = 9.99;

$total_cost = $quantity * $prod_price; #$totalCost berechnet den Gesamtpreis.
echo "<br>Shopping card : "  . $total_cost;  #Die echo-Anweisung gibt das Ergebnis dynamisch aus.

$addition = 1 + 1;
$minus = 2 -1;
$multiplication = 5 * 5;
$Division = 50 / 10;
$modulo = 50 % 3; # rest aus einer division 45 16x3 = 48 -> rest aus 50 = 2. Ergebnis = 2

echo "<br> modulo " . $modulo;

?>