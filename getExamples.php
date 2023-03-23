<?php

$body = file_get_contents("php://input");

$users = json_decode($body);



foreach ($users as $user) {
    echo $user->username."<br>";
}