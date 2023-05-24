<?php
namespace Database\Adapter;

require_once 'Mysql.php';
require_once 'SqlLite.php';

class General
{
    public function connect($type)
    {
        if ($type == 'Mysql')
        {
            $mysql = new Mysql;
            $mysql->connect();
        }else
        {
            $sqlLite= new SqlLite;
            $sqlLite->connect();
        } 
    }
}