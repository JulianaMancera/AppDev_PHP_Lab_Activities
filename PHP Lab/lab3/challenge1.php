<?php
//Juliana R. Mancera | 3BSCS-2

/*
Challenge 1: Create a multiplication table using a nested `for` loop. The table output should look like this:

Multiplication Table

1 x 1 = 1
1 x 2 = 2
and so on...*/

for ($i = 1; $i <= 10; $i++) {

    for( $j = 1; $j <= 10; $j++ ) {
        
        echo "$i x $j" . ' = '. ($i * $j);
        echo '<br>';
    }
}



?>