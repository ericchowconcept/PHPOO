<?php

require_once 'Chat.php';

require_once 'Humain.php';
require_once 'MaitreChien.php';
require_once 'Siamois.php';
require_once 'SiamoisAngora.php';

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


$milou = new Chien;
$tintin = new MaitreChien($milou);

// *faire aboyer milou

echo '<br>' . $milou->crier();

echo '<br>' . $tintin->caresserChien();

echo '<br>' . $humain->nourir($milou);

var_dump(get_class_methods($tintin));
echo '<br>' . $tintin->getChien()->crier();

echo'<hr>';

$siamois = new Siamois;
echo $siamois->ronronner();
$siamois->setCouleur('gris');
$siamois->setCouleurYeux('bleu');
echo '<br>' . $siamois->decrire();

// $siamoisAngore = new SiamoisAngora;