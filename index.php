<?php

require('class/Shape.php');
require('class/Square.php');
require('class/Round.php');
require('class/Triangle.php');

$square1 = new Square(10,"carré 1"); // instancie la classe // construit un carré de 10
$square2 = new Square(24,"carré 2");

$square1->displayPerimeter('mm');
echo '<br>';
$square2->displayPerimeter();
echo '<br>';

$square1->displayArea();
echo '<br>';
$square2->displayArea();
echo '<br>';


$round1 = new Round(8,"cercle 1");

$round1->displayPerimeter();
echo '<br>';
$round1->displayArea();
echo '<br>';

$triangle1 = new Triangle(9,12,15,"triangle 1");

$triangle1->displayPerimeter();
echo '<br>';
$triangle1->displayArea();
echo '<br>';
?>
