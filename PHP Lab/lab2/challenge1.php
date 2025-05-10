<?php
    /* Juliana R. Mancera 3BSCS-2
    
    Challenge 1: Sum of an Array

    1. Create an array of numbers: 1,2,3,4,5
    2. Get the sum of all of the numbers combined and put into a variable. $sum
    3. Count the number of elements in the array and put into a variable. $quantity
    4. Print out 'The sum of the {quantity} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'.*/

echo '<h3> Sum of An Array</h3>';
   
// #1
    $numbers = [1, 2, 3, 4, 5];

// #2
    $sum = array_sum($numbers);

// #3
    $quantity = count($numbers);

// #4
    echo "The sum of the {$quantity} number is: {$sum}";