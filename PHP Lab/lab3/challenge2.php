<?php

//Juliana R. Mancera | 3BSCS-2
/*
 Challenge 2: Get the sum of the numbers in an array by using a foreach loop and for loop. 
*/

$numbers = [1, 2, 3, 4, 5]; //sum using foreach loop
$numbers2 = [1, 2, 3, 4, 5,6,7,8,9,19];  //sum using for loop

$sum1 = 0;
foreach ($numbers as $num) {
    $sum1 += $num;
}

$sum2 = 0;
 for( $i = 0; $i < count($numbers2); $i++) {
    $sum2 += $numbers2[$i];
 }

echo "Sum array using foreach loop:"; 
echo '<br>';
echo "$sum1";
echo '<br>';

echo "Sum array using for loop:"; 
echo '<br>';
echo "$sum2";
echo '<br>';
?>