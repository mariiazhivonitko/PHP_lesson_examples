<?php

//$resp = array();
//$resp["name"] = "Mariia";
//$resp["age"] = 38;

$allUsers = array();

$user1 = new stdClass();
$user1->username = "Mariia";
$user1->age = 39;

$user2 = new stdClass();
$user2->username = "Vladimir";
$user2->age = 40;

$allUsers[] = $user1;
$allUsers[] = $user2;

$json = json_encode($allUsers);



header('Content-Type: application/json');
echo $json;