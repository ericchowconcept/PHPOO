<?php

require_once 'Chat.php';

final class Siamois extends Chat
{
    public function  decrire()
    {
        return  'Chat de couleur ' . $this->getCouleur() . 
                ' et aux yeux de couleur ' . $this->couleurYeux;

    }
    //*public : Accèsible partout dans la class et dans l'objet
    //*private : Accèssible que dans la class dans laquel la propriété a été déclaré
    //*protected : Accèssible uniquement dans la classe parent et dans la classe hérité


    // *on ne peut pas surcharger la méthode ronronner car déclarer final dans Chat.php
    // public function ronronner()
    // {

    // }
}