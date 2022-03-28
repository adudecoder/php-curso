<?php

    class Sql extends PDO // PDO tem todas as funções do beginTransaction();
    {

        private $conn;

        public function __construct()
        {

            $this -> conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

            // $this -> conn -> exec('SET CHARACTER SET utf8');

        }

        private function setParams($statement, $parameters = array())
        {

            foreach ($parameters as $key => $value) {
    
                $this -> setParam($statement, $key, $value);
    
            }
    
        }
    
        private function setParam($statement, $key, $value)
        {
    
            $statement -> bindParam($key, $value);
    
        }
    
        public function execQuery($rawQuery, $params = array())
        {
    
            $stmt = $this -> conn -> prepare($rawQuery);
    
            $this -> setParams($stmt, $params);
    
            $stmt -> execute();
    
            return $stmt;
    
        }
    
        public function select($rawQuery, $params = array()):array
        {
    
            $stmt = $this -> execQuery($rawQuery, $params);
    
            return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
        }

    }

?>