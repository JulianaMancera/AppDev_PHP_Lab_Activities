<?php
/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

    1. Create an array of students with their names and grades (0 - 100)
        john 85,90,92,88
        jane 95,88,91,87
        joe  75,82,79,88

    2. Iterate over the students array with a foreach loop
    3. Calculate the average grade for each student

*/
$students = [
    ['name' => 'John','grades' => [85,90,92,88]],
    ['name' => 'Jane','grades' => [95,88,91,87]],
    ['name' => 'Joe','grades' => [75, 82, 79, 88]]];


echo 'Average Grade:';
echo '<br>';

foreach ($students as $student) {

    $name = $student['name'];
    $grades = $student['grades'];
    $average = array_sum($grades) / count($grades);

    echo '$name: Average Grade = '. number_format($average, 2);
    echo '<br>';

}

?>