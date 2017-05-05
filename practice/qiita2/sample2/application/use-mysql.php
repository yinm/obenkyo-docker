<?php

$dsn = 'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=docker_sample';
$user = 'root';
$password = $_ENV['DB_PASS'];

$dbh = new PDO($dsn, $user, $password);

$sql = "select database();";

foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row) {
    print_r($row);
}