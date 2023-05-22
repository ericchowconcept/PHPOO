<?php

require_once 'Chat.php';

require_once 'Humain.php';

// * la class abstraite animal ne peut pas être instancier
// *$animal = new Animal;

$chat = new Chat;
echo $chat->crier();

$chien = new Chien;
echo $chien->crier();

echo '<br>' . $chat->identifier();
echo '<br>' . $chien->identifier();
echo '<br>' . $chien->crier();

$humain = new Humain;
echo '<br>' . $humain->nourir($chat);
echo '<br>' . $humain->nourir($chien);
echo '<br>';


var_dump($chat instanceof Chien);  //*False
var_dump($chat instanceof Chat); //*True
var_dump($chat instanceof Animal); //*True

echo '<br>' . $humain->donnerSusucre($chien);

