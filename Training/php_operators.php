<?php

include_once('../db/db_connection.php');

#Operators exercise from ChatGpt:

#Write a PHP script that fulfills the following requirements:

#Create two variables $a and $b with the values 15 and 4.

#Output the results of the following operations:

#Addition

#Subtraction

#Multiplication

#Division

#Modulo

#Then increase $a by 5 and display the new value.
#Compare whether $a is greater than or equal to $b and output the result as text:

#If $a >= $b, then output:
#"$a is greater than or equal to $b"

#Otherwise output:
#"$a is less than $b"

#Check if either $a or $b is an even number (divisible by 2). If so, display:
#"At least one number is even"

#Create two strings:
#$str1 = "Hallo" and $str2 = " Welt"
#Concatenate them and display the result.

#✅ Bonus:
#Use the Spaceship Operator to compare $a and $b, and output the following based on the result:
#"$a is less than $b"
#"$a is equal to $b"
#"$a is greater than $b"

#exercise ( self coded with a little bit help in logic):


$a = 15;
$b = 4;


$a+= $b;
echo $a;

$a = 15;
$a-= $b;
echo "<br>$a";

$a = 15;
$a*= $b;
echo "<br>$a";

$a = 15;
$a/= $b;
echo "<br>$a";

$a = 15;
$a%= $b;
echo "<br>$a";

$a = 15;
$a += 5;
echo  "<br>$a";

$a = 15;
echo "<br>";
var_dump ($a == $b); #checks if $a and $b has the same value (bigger - equal - smaller)  
echo "<br>";
# its not equal so -> bool(false) -> if its equal $a and $b both has 5 (for example) = bool(true)

    if ($a < $b)  # if $a is smaller as $b print this - else --
    echo "a ist kleiner als B";
    else 
    echo "B ist größer als A";

    if ($a%2==0) { #if a is divisible by 2 (if no remainder - modulus) 
        echo "<br> A ist eine gerade zahl";
    }    else {
        echo "<br> A ist eine ungerade zahl";
    } 

    if ($b%2 == 0){
        echo "<br> B ist eine gerade Zahl";
    }    else {
        echo "<br> B ist keine gerade Zahl"; 
        
    }

$str1 = "Hello";
$str2 = " World";

echo "<br>";
echo ($str1 . $str2);


#Bonus: Spaceship operator

    if ($b%2==0 and $a%2==0) { #if both conditions are met
        echo "<br> beide zahlen sind gerade";
    }    
        else {
        echo "<br> No luck";
    }     
    

