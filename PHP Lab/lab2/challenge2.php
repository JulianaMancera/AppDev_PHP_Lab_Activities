<?php
    /* Juliana R. Mancera 3BSCS-2
 
    Challenge 2: Colors array

    1. Sort the `$colors` array in ascending order.
    2. Add 'purple' and 'orange' to the end of the array.
    3. Add 'Red Apple' to the beginning of the array
    4. Replace the green color of the array to Green mango.

    You should end up with the output of the following array: Array ( [0] => Red Apple [1] => blue [2] => Green mango [3] => red [4] => yellow [5] => purple [6] => orange )
*/

echo '<h3>Color Array</h3>';

   //Given array color value
    $colors = ['red', 'blue', 'green', 'yellow'];

// #1
    sort($colors);
// #2
   array_push($colors, 'purple', 'orange');
// #3
    array_unshift($colors, 'Red Apple');
// #4
    $colors[array_search('green', $colors)] = 'Green Apple';
    
print_r($colors);