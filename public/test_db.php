<?php
ini_set('display_errors',1);  error_reporting(E_ALL);

$DB_HOST = 'db';
$DB_USER = 'mysql';
$DB_PASSWORD = 'test45';
$DB_NAME = 'laravel';
function Connect2DB(){
    global $DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME;
    try {
        $DBH = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
        //$DBH->exec('SET NAMES utf8');
        //$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
    return $DBH;
}
$DBH=Connect2DB();
