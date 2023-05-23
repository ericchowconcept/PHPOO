<?php

function inclusionAutomatique($nomClasse)
{
    require_once($nomClasse. '.php');
}

spl_autoload_register('inclusionAutomatique');