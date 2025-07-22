<?php

include_once ("../db/db_connection.php");

#echo "This is a test ";

#Exercise Task ChatGPT. URL : https://chatgpt.com/share/687f263c-6b00-800d-b0a2-78ab9e5c4b7b

#Aufgabenstellung
#1. Erstelle ein Array mit 15 zufälligen Ganzzahlen zwischen 1 und 200.

    #Benutze dafür eine for-Schleife.
    #Weise die Werte mit dem Schlüssel „Zahl X“ zu, wobei X der aktuelle Schleifenindex ist.

#2. Sortiere das Array aufsteigend und gib das gesamte Array mit print_r oder var_dump aus.

#3.Gib die kleinste und die größte Zahl des Arrays aus.
    #Nutze hierfür die PHP-Funktionen min() und max().


#4.Berechne und gib den Durchschnitt aller Zahlen aus.
    #Der Durchschnitt ist die Summe aller Zahlen geteilt durch die Anzahl der Zahlen.

#5.Erweitere das Skript um ein weiteres Array:
    #Erstelle ein Array, das zu jedem der folgenden Namen drei zufällige Zahlen zwischen 1 und 100 speichert:
    
    #$namen = ["Lukas", "Eva", "Sophie", "Max", "Paul", "Laura", "Leon", "Mia", "Ben", "Lena"];
    
    #Die Struktur soll so aussehen:
    #$zahlen2["Name"] = [Zahl1, Zahl2, Zahl3];

#6.Berechne für jede der drei Stellen (also alle ersten, zweiten und dritten Zahlen) den Durchschnitt aller Personen.
    #Gib das Ergebnis jeweils gerundet auf ganze Zahlen aus.

#7.✅ Bonus-Aufgaben
    #Gib zusätzlich den Namen der Person mit der höchsten Gesamtsumme ihrer drei Zahlen aus.
    #Zeige alle Namen und deren jeweilige Summe der drei Zahlen in einer übersichtlichen Liste.

#1
$random_numbers = [];

for ($zahl_x = 0; $zahl_x < 15; $zahl_x +=1){
    
    $random_numbers ["$zahl_x"] = rand(0, 200);
}

#2.
sort($random_numbers);
print_r ($random_numbers);

#3.
echo "<br>Die kleinste Zahl ist " . min($random_numbers);
echo "<br>Die größste Zahl ist " . max($random_numbers);

#4.

$anzahl = count($random_numbers);
$summe = 0;

    foreach ($random_numbers as $value =>$Total_numbers) {
        $summe += $Total_numbers;
    }

$average_of_total_numbers = $summe / $anzahl;
$average_of_total_numbers = round($average_of_total_numbers, 0);
    
echo ("<br> Der Durchschnitt der Gesamtsumme beträgt: $average_of_total_numbers");

#5. 

$names = ["Lukas", "Eva", "Sophie", "Max", "Paul", "Laura", "Leon", "Mia", "Ben", "Lena"];
$random_numbers2 = [];
$sum_value1 = 0;
$sum_value2 = 0;
$sum_value3 = 0;
$number = 0;

for ($zahlen2 = 0; $zahlen2 <10; $zahlen2 +=1) {
    $random_numbers2[$names[$zahlen2]] = [rand(0, 100), rand(0, 100), rand(0, 100)];
}

    foreach ($random_numbers2 as $sum_value_total) {
        $sum_value1 += $sum_value_total[0];
        $sum_value2 += $sum_value_total[1];
        $sum_value3 += $sum_value_total[2];
        $number += 1;
}

#6.

    $sum_value1_average = $sum_value1 / $number;
    echo "<br>Der durchschnittswert des ersten wurfes : " . round($sum_value1_average, 0); 
    $sum_value2_average = $sum_value2 / $number;
    echo "<br>Der durchschnittswert des zweiten wurfes : " . round($sum_value2_average, 0);   
    $sum_value3_average = $sum_value3 / $number;
    echo "<br>Der durchschnittswert des dritten wurfes : " . round($sum_value3_average, 0);



#7. Bonus (not finished)

$sum_per_person = [];

