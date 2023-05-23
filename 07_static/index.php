<?php

require_once 'Config.php';

// *on acède directement à une constante de classe en appelant la classe suivie de ::CONSTANTE
echo Config::RACINE;

echo '<br>';

// *une méthode static peut être appelé par la classe elle même sans être instancié
echo Config::getPath('index.php');
echo '<br>';

// *une propriété privée statique n'est pas accessible à  l'exterieur de la classe dans laquelle elle est défini. 
echo Config::getTest();
echo '<br>';
