<?php

require_once 'Chien.php';

class MaitreChien
{
    /**
     * @var Chien
     */
    private $chien;
    
    public function __construct(Chien $monChien)
    {
        $this ->setChien($monChien);
    }

    public function caresserChien() : string
    {
        return $this->chien->crier();
    }
        /**
     * Get the value of chien
     *
     * @return  Chien
     */ 
    public function getChien() :Chien
    {
        return $this->chien;
    }

    /**
     * Set the value of chien
     *
     * @param  Chien  $chien
     *
     * @return  self
     */ 
    public function setChien(Chien $chien) :MaitreChien
    {
        $this->chien = $chien;

        return $this;
    }
}