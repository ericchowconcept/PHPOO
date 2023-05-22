<?php


/**
 * *une classe abstraite ne sert qu'à hérité
 * *elle ne peut pas être instancié
 */
abstract class Animal
{

    public function identifier()
    {
        return 'Je suis un animal';
    }
    /**
     * *une méthode abstraite ne peut être définie qu'au sein d'une classe abstraite
     * * Elle oblige les classes qui hérite à contenir cette méthode avec une contenu (=implementer une méthode)
     *  */ 
    abstract public function crier() :string;
}