<?php

namespace Database;


require_once 'Adapter/General.php';


class Cnx
{
    public function connect($type)
    {
        $general = new Adapter\General;
        $general->connect($type);
    }
}