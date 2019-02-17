<?php
abstract class Model{
    protected $dbh;
    protected $stmt_run;

    public function __construct(){
        $this->dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);        
    }

    public function query($query){
        $this->stmt_run = $this->$dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                    default;
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt_run->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->stmt_run->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt_run->fetchAll(PDO::FETCH_ASSOC);
    }
}