<?php


require_once 'Chien.php';

class Humain
{
    public function nourir(Animal $animal) :string
    {
        return $animal->crier();
    }
     public function donnerSusucre(Chien $chien) :string
     {
        
        return $chien->mangeSucre();
     }

}