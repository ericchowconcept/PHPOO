<?php

class Voiture extends Vehicule
{
    public function identifier()
    {
        return  parent::identifier() . ' et je suis un voiture.';
    }


    public function roue() :string
    {
        return '4 roue';
    }

}