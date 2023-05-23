<?php

require_once 'Volume.php';
require_once 'Texture.php';

class Brique implements Volume, Texture
{
    public function getCouleur():string
    {
        return 'rouge';
    }

    public function getMatiere():string
    {
        return 'terre';
    }

    public function  getForme():string
    {
        return 'parallélépipède rectangle';
    }

}