<?php
$User=[
    [1,"dhrupal","chabhadiyadhrupal99@gmail.com","rajkot"],
    [2,"ram","ram@test.com","jamnagar"],
    [3,"ravi","ravi@test.com","Test"]
];
echo "<table border=2>";
for($i=0; $i<count($User); $i++)
{
    echo "<tr>";
    for($j=0; $j<count($User[$i]);$j++)
    {
        echo "<td>";
        Echo $User[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>