<?php

$dsn = 'mysql:host=' . $_ENV['MYSQL_PORT_3306_TCP_ADDR'];
$user = 'root';
$password = $_ENV['MYSQL_ENV_MYSQL_ROOT_PASSWORD'];

$dbh = new PDO($dsn, $user, $password);

$sql = "SELECT version();";

foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row) {
    print_r($row);
}