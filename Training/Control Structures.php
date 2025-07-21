<?php

include_once('../db/db_connection.php');

#Control Structure Training

$x = -10;

if ($x >= 0){
        echo "Die Zahl ist eine Positive Zahl";
} else {
        echo " Die zahl ist eine negative Zahl";
}


$grade = 85;

if ($grade >=90) {
    echo "<br>You got a A";
}
    elseif ($grade >= 80) {
        echo "<br>You got a B";
    }
    elseif ($grade >= 70) {
        echo "<br>You got a C";
    }
    elseif ($grade >= 60) {
        echo "<br>You got a D";
    }
    else  {
        echo "<br>youre a failure";
    }

#ChatGPT exercise:

#📌 Aufgabe: Notenauswertung & Statistiken
#Schreibe ein PHP-Skript, das Folgendes tut:

#Ein Array mit den Namen und Noten von Schülern enthält, z.B.:

#php
#Kopieren
#Bearbeiten
#$students = array(
#    "Anna" => 85,
#    "Ben" => 92,
#    "Clara" => 78,
#    "David" => 60,
#    "Eva" => 55
#);
#Durchlaufe das Array mit einer foreach-Schleife und:

#Verwende eine if-elseif-else-Anweisung, um die Note in eine Schulnote umzuwandeln:

#90-100 → "Sehr gut"

#80-89 → "Gut"

#70-79 → "Befriedigend"

#60-69 → "Ausreichend"

#<60 → "Mangelhaft"

#Gib für jeden Schüler Name, Punktezahl und die Schulnote aus.

#Berechne den Durchschnitt der Punkte aller Schüler mit einer foreach- oder for-Schleife.

#Verwende eine switch-Anweisung, um abhängig vom Durchschnitt eine Gesamtauswertung auszugeben:

#≥90: „Klasse hat eine hervorragende Leistung.“

#≥80: „Klasse hat eine gute Leistung.“

#≥70: „Klasse hat eine befriedigende Leistung.“

#sonst: „Klasse sollte sich verbessern.“

$students = array("Anna" => 85,"Ben" => 92,"Clara" => 78,"David" => 60,"Eva" => 55); 

foreach ($students as $name => $score) {

    if ($score >=90) {
        $grade = "Sehr gut";
    } elseif ($score >= 80) {
        $grade = "gut";   
    } elseif ($score >= 70) {
        $grade = "befriedigend";   
    } elseif ($score >=60) {
        $grade = "ausreichend";
    } else {
        $grade = "Mangelhaft";
    }
        
    echo "<br>$name hat $score punkte und eine note von $grade erreicht";
}        

$student_count = count($students);
$total_score_of_all_students = 0;

foreach ($students as $name  => $student_score) {
    $total_score_of_all_students += $student_score;
}

$average_score_of_all_students = $total_score_of_all_students / $student_count;

    if ($average_score_of_all_students >= 90) {
        echo "<br>Klasse hat eine hervorragende Leistung.";
    } elseif ($average_score_of_all_students >= 80) {
        echo "<br>Klasse hat eine gute Leistung";   
    } elseif ($average_score_of_all_students >= 70) {
        echo "<br>Klasse hat eine befriedigende Leistung";   
    } else {
        echo "<br> Die Klasse sollte sich verbessern.";
    } 
    
        
