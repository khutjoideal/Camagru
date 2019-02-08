<?php

require('setup.php');

try {
    $pdo = new \PDO($DB_DSN, $DB_USER, $DB_PASSWORD, $options);
    $dbh = "CREATE DATABASE IF NOT EXISTS $db_camagru";
    $pdo->exec($dbh);
    $dbh = `USE $db_camagru`;
    $pdo->exec($dbh);
    $dbh = "CREATE TABLE IF NOT EXISTS `users` (
            `user_id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
            `user_first` VARCHAR(30) NOT NULL,
            `user_last` VARCHAR(30) NOT NULL,
            `user_email` VARCHAR(128) NOT NULL,
            `user_username` VARCHAR(30) NOT NULL UNIQUE,
            `user_password` VARCHAR(256) NOT NULL,
            `u_profile_pic` VARCHAR(256) NOT NULL,
            );";
    $pdo->exec($dbh);
    echo "DB created successfully";
}   catch (\PDOException $e) {
        echo $dbh . "<br>" . $e->getMessage();
}

?>
