<?php
require "dbconnection.php";
$dbcon = createDbConnection();

//Haetaan ja tulostetaan products descriptions
$sql = "SELECT textDescription FROM productLines";

$statement = $dbcon->prepare($sql);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
    echo $row["textDescription"]."<br><hr><br>";
};


//Haetaan ja tulostetaan asiakaiden maat
$sql = "SELECT * FROM customers";
$statement = $dbcon->prepare($sql);
$statement->execute();

$countries = $statement->fetchAll(PDO::FETCH_COLUMN,10);
foreach($countries as $country){
    echo $country."<br>";
};

echo "******************<br>";

$sql = "SELECT * FROM offices";

$statement = $dbcon->prepare($sql);
$statement->execute();

$officeRow = $statement->fetch();
$officeCode = $officeRow["officeCode"];

$sql = "SELECT email FROM employees WHERE officeCode=".$officeCode;
$statement = $dbcon->prepare($sql);
$statement->execute();

$emails = $statement->fetchAll(PDO::FETCH_COLUMN);

echo "<h2>".$officeRow["city"]."</h2>";

foreach($emails as $email){
    echo $email."<br>";
}
