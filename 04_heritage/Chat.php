<?php

require_once 'Animal.php';


class Chat extends Animal
{
    /**
     * @var string
    */
    private $couleur;
    /**
     * @var string
     */
    protected $couleurYeux;

    final public function ronronner()
    {
        return 'ronron';
    }

    public function identifier()
    {
        return  parent::identifier() . ' et je suis un chat.';
    }

    public function crier():string
    {
        return 'Miaou Miaouuuuuuuuu';
    }

    /**
     * Get the value of couleur
     *
     * @return  string
     */ 
    public function getCouleur() :string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @param  string  $couleur
     *
     * @return  self
     */ 
    public function setCouleur(string $couleur) :Chat
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of couleurYeux
     *
     * @return  string
     */ 
    public function getCouleurYeux() :string
    {
        return $this->couleurYeux;
    }

    /**
     * Set the value of couleurYeux
     *
     * @param  string  $couleurYeux
     *
     * @return  self
     */ 
    public function setCouleurYeux(string $couleurYeux) :Chat
    {
        $this->couleurYeux = $couleurYeux;

        return $this;
    }
}