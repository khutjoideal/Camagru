<?php

require('setup.php');

class LoginDB extends loginCred{
        public function dsn_method(){
                return parent::dsn_method();
        }
}

$run_conn = new LoginDB();

try {
        $run_conn->dsn_method();

        $adap = $run_conn->dsn_method()->prepare('CREATE DATABASE IF NOT EXISTS :db');
        $adap->execute(['db' => $run_conn->dsn_method($db_camagru)]);
        $run = $adap->fetch();

        $adap = $run_conn->dsn_method()->prepare('USE :db');
        $adap->execute(['db' => $run_conn->dsn_method($db_camagru)]);
        $run = $adap->fetch();

        $adap = $run_conn->dsn_method()->prepare("CREATE TABLE IF NOT EXISTS `users`(
        `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        `user_first` VARCHAR(127) NOT NULL,
        `user_last` VARCHAR(127) NOT NULL,
        `user_email` VARCHAR(127) NOT NULL,
        `user_id` VARCHAR(127) NOT NULL UNIQUE,
        `user_password` VARCHAR(255) NOT NULL,
        `u_profile_pic` VARCHAR(20000) NOT NULL,
        `register_date` DATETIME CURRENT_TIMESTAMP,
        );");
        $adap->execute([]);
        $run = $adap->fetch();

        $adap = $run_conn->dsn_method()->prepare("CREATE TABLE IF NOT EXISTS `shares`
        `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        `user_id` INT NOT NULL,
        `title` VARCHAR(255),
        `body` TEXT,
        `link` VARCHAR(255),
        `create_date` DATETIME CURRENT_TIMESTAMP,
        )");
        $adap->execute([]);
        $run = $adap->fetch();

        echo "DB created successfully";
} catch (\PDOException $e) {
        return ;
}
?>