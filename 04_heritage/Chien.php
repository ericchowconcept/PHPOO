<?php

require_once 'Animal.php';

class Chien extends Animal
{
    public function crier() :string
    {
        return 'Whouaf Whouaffffff';
    }

    public function mangeSucre() :string
    {
        return "Le chien mange le sucre";
    }
}