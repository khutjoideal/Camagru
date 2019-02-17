<?php
abstract class loginCred{
    protected $host;
    protected $DB_USER;
    protected $DB_PASSWORD;
    protected $db_camagru;
    protected $charset;
    protected $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    protected $DB_DSN;

    public function __construct($host, $DB_USER, $DB_PASSWORD, $db_camagru, $charset, $options, $DB_DSN){
        $this->host = `127.0.0.1`;
        $this->DB_USER = `root`;
        $this->DB_PASSWORD = `1og5fEsvkiK`;
        $this->db_camagru = `camagru_database`;
        $this->charset = `utf8mb4`;
        $this->options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->DB_DSN = "mysql:host=$host;dbname=$db_camagru;charset=$charset";
        $this->pdo = new \PDO($DB_DSN, $DB_USER, $DB_PASSWORD, $options);
    }

    public function dsn_method(){
        return $this->pdo;
    }
}

    
?>