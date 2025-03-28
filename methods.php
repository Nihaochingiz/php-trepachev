<?php
class Database
{
//  database host port username password
public $database;
public $host;
public $port;
public $username;
public $password;

public function show() 
{
    return 'Show records in table';
}
}


$postgres = new Database;

$postgres->database = 'Postgresql';
$postgres->host = 'localhost';
$postgres->port = '5432';
$postgres->username = 'root';
$postgres->password = 'secretPassword';


echo $postgres->show();
echo PHP_EOL; 
echo $postgres->password;
echo PHP_EOL; 
