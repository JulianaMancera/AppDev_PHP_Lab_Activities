<?php
// Juliana R. Mancera 3BSCS-2 | Challenge 3: Find the longest word 10pts
function findLongestWord($sentence) {
    $words = explode(" ", $sentence);
    $longest = "";

    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
    return $longest;
}

$sentence = 'The quick brown fox jumped over the lazy dog';
$longestWord = findLongestWord($sentence);
echo $longestWord;
?>