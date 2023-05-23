<?php

abstract class Vehicule
{
    /**
     * @var string
     */
    private $carburant;

    /**
     * @var int
     */
    private $vitesseMax;

    /**
     * @var int
     */
    private $vitesse = 0;

    /**
     * @var int
     */
    private $contenanceReservoir;

    /**
     * @var int
     */
    private $contenuReservoir;


    public function __construct(string $carburant, int $vitesseMax, int $contenanceReservoir, int $contenuReservoir)
    {
        $this-> setCarburant($carburant)->setVitesseMax($vitesseMax)->setContenanceReservoir($contenanceReservoir) ->setContenuReservoir($contenuReservoir);
    }

    public function accelerer(int $vitesseAcc)
    {
        if(($this->vitesse + $vitesseAcc) < ($this->vitesseMax))
        {
            $this->vitesse += $vitesseAcc;
            echo 'ta vitesse est de' . $this->vitesse;
        }else{
            trigger_error('vous avez atteint votre vitesse maximum');
        }
    }

    public function acceleration(int $vitesseAcc)
    {
        if($this->vitesse+$vitesseAcc >= $this->vitesseMax)
        {
            $this->vitesse = $this->vitesseMax;
            echo 'tu es au max, ralentit stp';
        }else{
            $this->vitesse +=$vitesseAcc;
            echo "tu roules à" . $this->vitesse . 'km/h';
        }
    }
  
  

    public function identifier()
    {
        return 'Je suis un véhicule';
    }


    abstract public function roue():string;



    /**
     * Get the value of carburant
     *
     * @return  string
     */ 
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set the value of carburant
     *
     * @param  string  $carburant
     *
     * @return  self
     */ 
    public function setCarburant(string $carburant) :Vehicule
    {
        if($carburant =='SP95' || $carburant == 'SP98')
        {
            $this->carburant = $carburant;
        } else{
            trigger_error('Carburant acceptés : SP95 ou SP98');
        }
        return $this;
    }

    /**
     * Get the value of vitesseMax
     *
     * @return  int
     */ 
    public function getVitesseMax() :int
    {
        return $this->vitesseMax;
    }

    /**
     * Set the value of vitesseMax
     *
     * @param  int  $vitesseMax
     *
     * @return  self
     */ 
    public function setVitesseMax(int $vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }

    /**
     * Get the value of vitesse
     *
     * @return  int
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @param  int  $vitesse
     *
     * @return  self
     */ 
    public function setVitesse(int $vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of contenanceReservoir
     *
     * @return  int
     */ 
    public function getContenanceReservoir()
    {
        return $this->contenanceReservoir;
    }

    /**
     * Set the value of contenanceReservoir
     *
     * @param  int  $contenanceReservoir
     *
     * @return  self
     */ 
    public function setContenanceReservoir(int $contenanceReservoir)
    {
        $this->contenanceReservoir = $contenanceReservoir;

        return $this;
    }

    /**
     * Get the value of contenuReservoir
     *
     * @return  int
     */ 
    public function getContenuReservoir()
    {
        return $this->contenuReservoir;
    }

    /**
     * Set the value of contenuReservoir
     *
     * @param  int  $contenuReservoir
     *
     * @return  self
     */ 
    public function setContenuReservoir(int $contenuReservoir)
    {
        $this->contenuReservoir = $contenuReservoir;

        return $this;
    }
}