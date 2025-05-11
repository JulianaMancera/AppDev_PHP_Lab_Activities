<?php
// Juliana R. Mancera 3BSCS-2 | Challenge 1: Fahrenheit to Celsius 3pts

/* function fahrenheitToCelsius($fahrenheit) {
  return ($fahrenheit - 32) * 5 / 9;}*/

// convert to an arrow function (+2pts)

$fahrenheitToCelsius = fn($fahrenheit) => ($fahrenheit - 32) * 5 / 9;
$fahrenheit = 68;

$celsius = $fahrenheitToCelsius($fahrenheit);
echo "$fahrenheit&deg;F = " . round($celsius) . "&deg;C";

?>