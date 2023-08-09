<?php

class Database{

    private $hostname = DB_HOST;
    private $username = DB_USER;
    private $pass = DB_PASS;
    private $database = DB_NAME;    

    private $database_host;
    private $statement;

    public function __construct()
    {
        $data_source = 'mysql:host='.$this->hostname.';dbname='.$this->database;

        $option = [
            PDO::ATTR_PERSISTENT => TRUE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
        ];
        
        try {
            $this->database_host = new PDO($data_source, $this->username,$this->pass);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query){
        $this->statement = $this->database_host->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch (true) {
                case is_int($value):
                    $type = pdo::PARAM_INT;
                    break;
                
                case is_bool($value):
                    $type = pdo::PARAM_BOOL;
                    break;

                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;

                default:
                    $type = PDO::PARAM_STR;            
            }
        }
        $this->statement->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->statement->execute();
    }

    public function result_set(){
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function result_single(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
}