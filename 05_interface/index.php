<?php

require_once 'Cube.php';
require_once 'De.php';

$cube = new Cube;


// *$cube est instancié avec la class Cune donc il est instance de Cube
var_dump($cube instanceof Cube);
echo '<br>';
// *$cube est instance de Cube et Cube implements Volume du coup $cube est instance de Volume

var_dump($cube instanceof Volume);
echo '<br><hr><br>';

$de = new De('blanc', 'plastique');
var_dump($de instanceof Volume);
echo '<br>';
var_dump($de instanceof De);
echo '<br>';
var_dump($de instanceof Texture);
echo '<br>';
var_dump($de instanceof Cube);
echo '<br>';





