<?php

use Database\Adapter\Mysql;
use Smtp\Cnx;
use Database\Cnx as dbCnx;

require_once 'Smtp/Cnx.php';
require_once 'Database/Cnx.php';

// *instanciation avec namespace sans use
// $smtp = new Smtp\Cnx;
// $smtp->connect();

// echo '<br>';

// $db = new Database\Cnx;
// $db->connect('Mysql');

// echo '<br>';
// $mysql = new Database\Adapter\mysql;

$mysql = new mysql;
$mysql->connect();

echo '<br>';

$smtp = new Cnx;
$smtp->connect();

echo '<br>';

$db = new dbCnx;
$db->connect('SqlLite');