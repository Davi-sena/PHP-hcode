<?php

class Sql extends PDO{

    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost; dbname=ong","root","root");
    }

    public function execQuery($rawQuery,$params = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($rawQuery,$params);
        $stmt->execute();
        return $stmt;
    }

    public function setParams($statment,$parameters = array()){
        foreach($parameters as $key => $value){
            $this->setParam($statment,$key,$value);
        }
    }
    
    public function setParam($statment,$key,$value){
        $statment->bind_param($key,$value);
    }

    public function select($rawQuery, $params = array()):array{

        $stmt = $this->execQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}

