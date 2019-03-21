<?php
//if (isset($_GET['name'])) {
//    $name = $_GET['name'];
//    echo "<h1>Hello, $name!</h1>";
//}
//else
//    echo "podaj imie";
$op = $_GET['op'];
$x = $_GET['x'];
$y = $_GET['y'];
$sum = $x + $y;
$subtract = $x - $y;
$multiply = $x * $y;
$divide = $x / $y;

if ($op == "sum")
    echo "<h1>$x + $y = $sum</h1>";
elseif ($op == "subtract")
    echo "<h1>$x - $y = $subtract</h1>";
elseif ($op == "multiply")
    echo "<h1>$x * $y = $multiply</h1>";
elseif ($op == "divide")
    echo "<h1>$x / $y = $divide</h1>";
else
    echo "Unrecognized operation: $op";
