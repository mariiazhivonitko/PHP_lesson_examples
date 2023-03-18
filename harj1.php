<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$sql = "INSERT INTO productlines (productLine, textDescription) VALUES
    ('Bikes', 'super speed'),
    ('Scooters', 'very nice')";

$dbcon->exec($sql);

$sql = "INSERT INTO products VALUES
    ('n1', 'Helkama', 'Bikes', 'bdufyg', 'Helkama', 'base bike', 12,300,32)";
$dbcon->exec($sql);