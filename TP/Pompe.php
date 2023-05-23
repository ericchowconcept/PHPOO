<?php

require_once 'Vehicule.php';

class Pompe
{
    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $contenuCuve;

    public function __construct(string $typeCarburant, int $contenuCuve)
    {
        $this->setTypeCarburant($typeCarburant)->setContenuCuve($contenuCuve);
    }


    /**
     * Get the value of typeCarburant
     *
     * @return  string
     */ 
    public function getTypeCarburant() :string
    {
        return $this->typeCarburant;
    }

    /**
     * Set the value of typeCarburant
     *
     * @param  string  $typeCarburant
     *
     * @return  self
     */ 
    public function setTypeCarburant(string $typeCarburant) :Pompe
    {
        if($typeCarburant =='SP95' || $typeCarburant == 'SP98')
        {
            $this->typeCarburant = $typeCarburant;
        } else{
            trigger_error('Carburant acceptés : SP95 ou SP98');
        }
        return $this;
    }

    /**
     * Get the value of contenuCuve
     *
     * @return  int
     */ 
    public function getContenuCuve() :string
    {
        return $this->contenuCuve;
    }

    /**
     * Set the value of contenuCuve
     *
     * @param  int  $contenuCuve
     *
     * @return  self
     */ 
    public function setContenuCuve(int $contenuCuve) :Pompe
    {   

        $this->contenuCuve = $contenuCuve;

        return $this;
    }
}