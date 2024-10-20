<?php
// Define two variables
$a = 10;
$b = 20;
// Equal to
echo "$a == $b: " . ($a == $b ? 'true' : 'false') . "<br>";
// Not equal to
echo "$a != $b: " . ($a != $b ? 'true' : 'false') . "<br>";
// Greater than
echo "$a > $b: " . ($a > $b ? 'true' : 'false') . "<br>";
// Less than
echo "$a < $b: " . ($a < $b ? 'true' : 'false') . "<br>";
// Greater than or equal to
echo "$a >= $b: " . ($a >= $b ? 'true' : 'false') . "<br>";
// Less than or equal to
echo "$a <= $b: " . ($a <= $b ? 'true' : 'false') . "<br>";
// Spaceship operator
echo "$a <=> $b: " . ($a <=> $b) . "<br>"; // -1 if $a < $b, 0 if $a == $b, 1 if $a > $b
// Identical
$x = '10'; // string
$y = 10;   // integer
echo "$x === $y: " . ($x === $y ? 'true' : 'false') . "<br>";
// Not identical
echo "$x !== $y: " . ($x !== $y ? 'true' : 'false') . "<br>";
?>
