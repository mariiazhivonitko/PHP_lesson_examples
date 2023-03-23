<?php
require "dbconnection.php";
$dbcon = createDbConnection();
echo "Hello!";

$sql = "SELECT * FROM person";

$statement = $dbcon->prepare($sql);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows AS $row){
    echo $row["id"].":".$row["name"]."<br>";
}