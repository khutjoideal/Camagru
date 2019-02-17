<?php

require('setup.php');

class LoginDB extends loginCred{
        public function dsn_method(){
                return parent::dsn_method();
        }
}

try {

        $sth = $dbh->prepare('SELECT your_column FROM your_table WHERE column < :parameter');
        $sth->bindParam(':parameter', $your_variable, PDO::PARAM_STR);
        $sth->execute();

        $run_conn->dsn_method();

        $adap = $dbh->prepare('CREATE DATABASE IF NOT EXISTS < :parameter');
        $adap->bindParam(':parameter', $db_camagru, PDO::PARAM_STR);
        $adap = "CREATE DATABASE IF NOT EXISTS $db_camagru";
        $adap->execute($dbh);

        $adap = $dbh->prepare('USE < :parameter_1');
        $adap->bindParam(':parameter', $db_camagru, PDO::PARAM_STR);
        $dbh = `USE $db_camagru`;
        $adap->execute($dbh);

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
        $adap->exec($dbh);
        $dbh = "CREATE TABLE IF NOT EXISTS `shares`
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
?>