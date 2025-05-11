<?php 

// Juliana R. Mancera 3BSCS-2 | Challenge 2: Print Names In Uppercase 5pts

$names = ['Alice', 'Bob', 'Charlie', 'David'];
    
    function printNamesToUpperCase($names) {
        return array_map('strtoupper', $names);
    }

    $uppercaseNames = printNamesToUpperCase($names);
    echo implode('<br>', $uppercaseNames);
?>