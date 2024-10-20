<?php
// Initialize variable
$x = 5;
echo "Initial value of x: $x<br>";

// Pre-increment
echo "Pre-increment (++\$x): " . (++$x) . "<br>"; // Increments $x to 6, then outputs 6

// Post-increment
echo "Post-increment (\$x++): " . ($x++) . "<br>"; // Outputs 6, then increments $x to 7

// Current value after post-increment
echo "Value of x after post-increment: $x<br>"; // Outputs 7

// Pre-decrement
echo "Pre-decrement (--\$x): " . (--$x) . "<br>"; // Decrements $x to 6, then outputs 6

// Post-decrement
echo "Post-decrement (\$x--): " . ($x--) . "<br>"; // Outputs 6, then decrements $x to 5
// Current value after post-decrement
echo "Value of x after post-decrement: $x<br>"; // Outputs 5
?>
