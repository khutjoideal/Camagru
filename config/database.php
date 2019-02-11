<?php

require('setup.php');

class LoginDB extends Login{
        public function runLogin(){
                try {
                $pdo = new \PDO($DB_DSN, $DB_USER, $DB_PASSWORD, $options);
                $dbh = "CREATE DATABASE IF NOT EXISTS $db_camagru";
                $pdo->exec($dbh);
                $dbh = `USE $db_camagru`;
                $pdo->exec($dbh);
                $dbh = "CREATE TABLE IF NOT EXISTS `users`(
                        `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
                        `user_first` VARCHAR(127) NOT NULL,
                        `user_last` VARCHAR(127) NOT NULL,
                        `user_email` VARCHAR(127) NOT NULL,
                        `user_id` VARCHAR(127) NOT NULL UNIQUE,
                        `user_password` VARCHAR(255) NOT NULL,
                        `u_profile_pic` VARCHAR(255) NOT NULL,
                        `register_date` DATETIME CURRENT_TIMESTAMP,
                        );";
                $pdo->exec($dbh);
                $dbh = "CREATE TABLE IF NOT EXISTS `shares`(
                        `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
                        `user_id` INT NOT NULL,
                        `title` VARCHAR(255),
                        `body` TEXT,
                        `link` VARCHAR(255),
                        `create_date` DATETIME CURRENT_TIMESTAMP,
                        )";
                echo "DB created successfully";
                } catch (\PDOException $e) {
                        echo $dbh . "<br>" . $e->getMessage();
                }
        }
}
?>