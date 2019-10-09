<?php
include_once 'Square.php';

$squareOne = new Square(1);
$squareTwo = new Square(2);
$squareThree = new Square(3);
$squareFour = new Square(4);
$squareFive = new Square(5);

$squares = [];
array_push($squares, $squareOne, $squareTwo, $squareThree, $squareFour, $squareFive);

foreach ($squares as $square) {
    echo "Area: " . $square->calArea();
    echo "<br>";
    echo $square->toString();
    echo "<br>";
}