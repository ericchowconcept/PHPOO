<?php

class Config
{
    const RACINE = '/PHPOO/07_static/';

    private static $test = 'test';

    public static function getPath(string $filename)
    // *dans une méthode statique on ne peut pas utiliser $this (faisant référence à l'objet courant) car cette méthode pourra être appelé sans instanciation de l'objet au préalable
    // *on utilise donc self avec :: (opérateur de résolution de portée) pour référence à la classe elle même
    {
        return self::RACINE . $filename;
    }

    public static function getTest() :string
    {
        return self::$test;
    }

    public static function setTest($valeur)
    {
        self::$test = $valeur;
    }
}