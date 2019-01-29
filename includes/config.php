<?php

$host = `127.0.0.1`;
$DB_USER = `root`;
$DB_PASSWORD = `1og5fEsvkiK`;
$db_camagru = `camagru_database`;
$charset = `utf8mb4`;
$DB_DSN = `mysql:host=$host;dbname=$db_camagru;charset=$charset`;
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

?>