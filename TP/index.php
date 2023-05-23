<?php
/**
  ** 1ère partie
  * *Créer une classe abstraite Vehicule qui va contenir des propriétées pour retourner:
  */
  /**
   * *-typeCarburant : le type de carburant (SP95 ou SP98)
   * *-vitesseMax : la vitesse maximum du véhicule
   * *-une vitesse  (zéro par défault)
   * *-contenanceReservoir : la taille du réservoir
   * *-contenuReservoir : combien de litre de carburant le véhicule contient
   * *-nombre de roues (lié au type de véhicule, toujours le même nombre de roue en fonction du type de véhicule.)
   * 
   * *ajouter un constructeur (__construct)
   * 
   * *créer 2 classes qui vont hériter de Vehicule : Moto et Voiture - done

   * *instancier un véhicule de chaque type
   * 
   * 
   * *ajouter une méthode accelerer qui prend en parametre le nombre de km/h de l'accélération
   * 
   * 
   ** empecher que l'on puisse dépasser la vitesseMax du véhicule.
   * 
   */
//------------------------------------------------------------------

require_once 'Vehicule.php';

require_once 'Moto.php';
require_once 'Voiture.php';


$moto = new Moto('SP95', 200, 18, 5 );

echo $moto->accelerer(100);


$voiture = new Voiture('SP98', 300, 40, 10);


// var_dump(get_class_methods($voiture));


/**
 ** 2ème partie
 * *créer une classe Pompe ayant pour propriétés :
 * *$typeCarburant (SP95 ou SP98) => gérer la condition
 * *$contenuCuve  => nombre de litre restant dans la cuve
 * *gerer les setter et getter
 * *créer le construteur
 * 
 * 
 * *dans Vehicule creer une méthode fairePlein()
 * *cette méthode attend en argument un objet instance de la classe pompe afin qu'un véhicule puisse faire le plein sur cette pompe
 * 
 * 
 * *effectuer les controles suivant : 
 * 
 * *1 - vérifier le type de carburant, donc même carburant entre le vehicule et la pompe
 * *2 - vérifier les besoins en carburant de notre vehicule (différence entre la contenance et le contenue)
 ** 3 - vérifier que la cuve(Pompe) contient suffisant de carburant pour faire le plein de mon véhicule.
 * *sinon on vider la cuve et mettre le restant de la cuve dans le reservoir
 * 
 * 
 */