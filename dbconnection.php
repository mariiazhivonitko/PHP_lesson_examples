<?php

function createDbConnection()
{
    $ini = parse_ini_file("myconf.ini");

    $host = "localhost";
    $db = "sample";
    $username = 'root';
    $pw = '';

    try {
        $dbcon = new PDO("mysql:host=$host;dbname=$db", $username, $pw);
        return $dbcon;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return null;
}
