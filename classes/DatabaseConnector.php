<?php
    class DatabaseConnector{
        private $host = "localhost";
        private $user = "root";
        private $pass = "root";
        private $db = "rockabilly";
            
        private function connect(){
            $connection = new mysqli($host, $user, $pass, $db);
            
            if($connection->connect_error){
                die('Connect Error (' . $connection->connect_errno . ')'
                        . $connection->connect_error);
            }
            return $connection;
        }    
        
        static function selectFromTableOrderBy($table,$field,$order){
            $connection = $this->connect();
            $result = $connection->query("SELECT * FROM ". $table ." ORDER BY ". $field ." ".$order);
            $connection->close();
            return $result;
        }
    }

