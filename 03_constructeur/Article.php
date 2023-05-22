<?php

class Article
{
    /**
     * @var string
     */
    private $titre;
    /**
     * @var string|null 
     */
    private $contenu;

    /**
     * @var Datetime
     */
    private $datePublication;


    /**
     * *Constructeur de la class Article:
     * *cette méthode est appelé automatiquement à l'instanciation d'un objet de la classe. Il n'existe qu'un seul constructeur par classe.
     */
    public function __construct(string $titre, ?string $contenu = null )
    {
        $this->setTitre($titre)->setContenu($contenu)->setDatePublication(new DateTime());
    }

    public function __toString()
    {
        
        return $this ->titre . "<br>" . " Pourquoi tu veux convertir un objet un string? " . $this->contenu;
    }
    
     /**
     * Get the value of titre
     *
     * @return  string
     */ 
    public function getTitre() :string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param  string  $titre
     *
     * @return  self
     */ 
    public function setTitre(string $titre) :Article
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of contenu
     *
     * @return  string|null
     */ 
    public function getContenu() :?string
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @param  string|null  $contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu) :Article
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of datePublication
     *
     * @return  Datetime
     */ 
    public function getDatePublication() :DateTime
    {
        return $this->datePublication;
    }

    /**
     * Set the value of datePublication
     *
     * @param  Datetime  $datePublication
     *
     * @return  self
     */ 
    public function setDatePublication(Datetime $datePublication) :Article
    {
        $this->datePublication = $datePublication;

        return $this;
    }

   
}