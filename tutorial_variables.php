<?php  #php language open

echo ("hello world!");
//$x = 1+1; echo($x);



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


#php close  ↓
?> 