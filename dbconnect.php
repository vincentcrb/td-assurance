<?php

$db_name = "td-assurance";
$host = "localhost";
$username = "root";
$password = "root";

$pdo = new PDO ('mysql:dbname='.$db_name.';host='.$host.'', $username, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Display errors