<?php
//*ici on déclare une classe utilisateur avec une majuscule au départ. convention de nommage
class User
{
    public $pseudo = "Eric";
    
    public $email;

    private $age = 35;

    //*ici on déclare une méthode de la classe user => c'est à dire une fonction interne de la classe. 
    public function getAge()
    { 
        //*$this fait référence à l'objet courant appelant la méthode
        //*pour accéder à une propriété privée directement, on peut le faire qu'a l'interieur d'une méthode de la classe
        return $this->age . 'ans';
    }

    public function sePresenter(){
        return 'L\'utilisateur  a pour pseudo : ' . 
        $this->pseudo . ' ainsi que pour email :' . 
        $this->email . ' et son age est de ' . 
        $this ->age . 'ans.';
    }

}


//*var_dump($pseudo); à l'exterieur de la classe, $pseudo n'existe pas donc underdefined/NULL pour la variable $pseudo.

//*ici on instancie un nouvel objet de la class User
$moi = new User;
var_dump($moi);
echo '<br>';

echo $moi->pseudo;
echo '<br>';

//*on ne peut pas accéder directement à une propriété privée depuis un objet user
//*echo $moi->age; => fatal error cannot access to private property

echo $moi -> getAge();

$moi -> email = "ericchow8@gmail.com";
echo '<br>';
echo $moi->email;
echo '<br>';

echo $moi -> sePresenter();
echo '<br>';


//*instancie un nouvel objet de la classe user et modifier son pseudo et son email et afficher sa présentation

$lui = new User();
$lui->pseudo = 'Francisco';
$lui ->email = 'fran.garcia@test.com';

echo $lui -> sePresenter();
echo '<br>';


// ! Mauvaise pratique : Ici on crée une propriété à la volée pour l'objet $toi. Si on a besoin d'une propriété on l'ajoute à la Class
// $toi->adresse= '10 rue quimcampoix';
// var_dump($toi);


// *stdClass() est le class de base de PHP (sans contenu)

$empty = new stdClass();
var_dump($empty);

$empty -> contenu = 'du contenu';
echo '<br>';
var_dump($empty);


$entier = 12;

$nombre = (string)$entier;
// *on peut forcer le typage d'une variable de string à int et vice versa
echo '<br>';
var_dump($entier,$nombre);

// *conversion d'un tableau en objet qui sera instance de al class stdClass
$array = [  'prenom' => 'Adrien', 
            'email' => 'adrien@test.com'];
$object = (object)$array;
echo '<br>';
var_dump($object);














