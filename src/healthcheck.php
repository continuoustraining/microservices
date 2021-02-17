<?php

include('./config.php');

try{
    $dbh = new \PDO( 'mysql:host='.DB_HOST.';dbname='.DB_NAME,
                    DB_USER,
                    DB_PASS,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}