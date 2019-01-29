<?php

include('')
try {
    $pdo = new PDO("mysql:host=$host", $DB_USER, $DB_PASSWORD, $options);
    
    $dbh->exec("CREATE DATABASE IF NOT EXISTS `$db_camagru`");
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>