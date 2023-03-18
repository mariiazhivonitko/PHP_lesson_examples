<?php
require "dbconnection.php";
$dbcon = createDbConnection();
$sql = "INSERT INTO person (name) VALUES(
   'MARIIA'
)";



$dbcon->exec($sql);
?>