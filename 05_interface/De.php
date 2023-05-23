<?php

require_once 'Cube.php';
require_once 'Texture.php';

class De extends Cube implements Texture
{
    private $couleur;
    private $matiere;

    public function __construct(string $couleur, string $matiere)
    {
        $this->setCouleur($couleur)->setMatiere($matiere);
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur() :string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur) 
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of matiere
     */ 
    public function getMatiere() :string
    {
        return $this->matiere;
    }

    /**
     * Set the value of matiere
     *
     * @return  self
     */ 
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }
}