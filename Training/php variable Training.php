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
#echo "Welcome to " . SITE_NAME  . " Payment on me: " . PAYMENT;

$item = "laptop";
$quantity = 3;
$on_stock = true;
$prod_price = 9.99;

$total_cost = $quantity * $prod_price; #$totalCost berechnet den Gesamtpreis.
#echo "<br>Shopping card : "  . $total_cost;  #Die echo-Anweisung gibt das Ergebnis dynamisch aus.

$addition = 1 + 1;
$minus = 2 -1;
$multiplication = 5 * 5;
$Division = 50 / 10;
$modulo = 50 % 3; # rest aus einer division 45 16x3 = 48 -> rest aus 50 = 2. Ergebnis = 2

#echo "<br> modulo  " . $modulo;

$x = 100; #integer
$x +=5;
$x -=30;
$x /=2;
$x %=500;
#echo "<br> Count after adding <br>" . $x ; 

$isEqual = (10 == 10);         // 10 ist das selbe wie 10
$isNotEqual = (10 != 5);       // 10 ist nicht das selbe wie 5
$isGreater = (10 > 5);         // 10 ist größer als 5 >
$isLess = (10 < 15);           // 10 ist kleiner als 15 <

$steffen_has_hair = false;
$steffen_need_hairs = true;

$andResult = $steffen_has_hair && $steffen_need_hairs;    //  ßß  = UND-Operator (false) 
$orResult = $steffen_has_hair || $steffen_need_hairs;     //  || = ODER-Operator (true) 


 $and_andresult = ($steffen_has_hair AND $steffen_need_hairs); 
 $or_orresult = ($steffen_has_hair or $steffen_need_hairs);


#Variable Training self coded

define("STEFFEN_TAX", 0.18);

$item_name = "Laptop";
$item_price = 499.95;
$item_quantity = 2;

$item_price_total = $item_price * (1 + STEFFEN_TAX);  # Berechnet 18% Mehrwertsteuer auf das gesamtprodukt (1 (1 Produkt) + 18% Mehrwertsteuer)
$item_price_total = round($item_price_total, 2);
$total_price = $item_price_total * $item_quantity;
$total_price = round($total_price, 2);

# Stellt das Ergebnis als "Rechnung" in der Reihenfolge dar

echo "<br> Asus rog strix g17 $item_name <br>";
echo "Preis pro stk: $item_price € <br>" ;
echo "Preis inkl Mehrwertsteuer $item_price_total € <br>"; 
echo "Stückzahl $item_quantity <br>";
echo "Gesamtpreis:  $total_price € <br>"; 


?>