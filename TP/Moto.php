<?php

class Moto extends Vehicule
{
    public function identifier()
    {
        return  parent::identifier() . ' et je suis un moto.';
    }


    public function roue() :string
    {
        return '2 roue';
    }

}