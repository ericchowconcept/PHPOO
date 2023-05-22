<?php

class Personne
{
    private $prenom;
    private $nom;


    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenom(string $prenom)
    {
        if(is_int($prenom))
        {
            trigger_error('le prenom ne peut pas être un entier');
            return $this;
        }else{
            $this ->prenom = $prenom;
            return $this;
        }
    }
    public function setNom(string $nom)
    {
        $this ->nom = $nom;
        return $this;
    }
}