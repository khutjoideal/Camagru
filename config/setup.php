<?php
class loginCred{
    private $host;
    private $DB_USER;
    private $DB_PASSWORD;
    private $db_camagru;
    private $charset;
    private $options;

    public function dsn_method(){
        $this->host = "localhost";
        $this->DB_USER = "root";
        $this->DB_PASSWORD = "1og5fEsvkiK";
        $this->db_camagru = "camagru_database";
        $this->charset = "utf8mb4";
        $this->options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]; 

        try {
            $DB_DSN = "mysql:host=".$this->host.";charset=".$this->charset;
            $pdo = new \PDO($DB_DSN, $this->DB_USER, $this->DB_PASSWORD, $this->options);
            echo "success <br/>";

            $adap = $pdo->prepare("CREATE DATABASE IF NOT EXISTS ".$this->db_camagru);
            $run = $adap->execute();
            echo "success <br/>";

            $pdo = null;
            $DB_DSN = "mysql:host=".$this->host.";dbname=".$this->db_camagru.";charset=".$this->charset;
            $pdo = new \PDO($DB_DSN, $this->DB_USER, $this->DB_PASSWORD, $this->options);
            echo "connected to database<br/>";
            return $pdo;
        } catch (\PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
    }
}

?>