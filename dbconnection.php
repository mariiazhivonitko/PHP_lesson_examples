<?php

function createDbConnection()
{
    $ini = parse_ini_file("myconf.ini");

    $host = $ini["host"];
    $db = $ini["db"];
    $username = $ini["username"];
    $pw = $ini["pw"];

    echo "Good!";
    
    try {
        $dbcon = new PDO("mysql:host=$host;dbname=$db", $username, $pw);
        echo "Good!";
        //return $dbcon;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    echo "HEI!";
}
