<?php 

require_once 'Personne.php';


$Eric = new Personne;

$Eric ->setPrenom('Eric');
echo $Eric -> getPrenom();
echo '<br>';

$Eric ->setNom('Chow');
echo $Eric ->getNom();
echo '<br>';
// *on peut afficher un objet avec var_dump ou print_r (pas avec echo(setPrenom retourne l'objet courant donc on ne peut pas faire un echo))
var_dump($Eric);

$paul = new Personne;
echo '<br>';

$paul->setPrenom('Paul')->setNom('Valery');
echo "prenom : " . $paul->getPrenom() . "nom : " . $paul->getNom();

