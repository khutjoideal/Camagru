<?php

require('setup.php');


$run_conn = new loginCred();

try {
        $conn = $run_conn->dsn_method();
        if ($conn)
                echo "connected<br/>";
        else
                echo "Error in connection<br/>";
        echo "succesful<br/>";

        $sql = "CREATE TABLE IF NOT EXISTS users(
        id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        user_first VARCHAR(127) NOT NULL,
        user_last VARCHAR(127) NOT NULL,
        user_email VARCHAR(127) NOT NULL,
        user_iden VARCHAR(127) NOT NULL UNIQUE,
        user_password VARCHAR(255) NOT NULL,
        u_profile_pic VARCHAR(20000) NOT NULL,
        register_date DATETIME
        )";
        $conn->exec($sql);
        echo "successful again <br/>";

        $sql = null;
         
        $sql = ("CREATE TABLE IF NOT EXISTS shares (
        id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        user_iden INT NOT NULL,
        title VARCHAR(255),
        body TEXT,
        link VARCHAR(255),
        create_date DATETIME
        )");
        $conn->exec($sql);

        echo "DB created successfully";
} catch (\PDOException $e) {
        return ;
}
?>