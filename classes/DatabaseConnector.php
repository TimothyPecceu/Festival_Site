<?php
    class DatabaseConnector{
        const HOST = "localhost";
        const USER = "root";
        const PASS = "root";
        const DB = "rockabilly";
            
        private function connect(){
            $connection = new mysqli(self::HOST, self::USER, self::PASS, self::DB);
            
            if($connection->connect_error){
                die('Connect Error (' . $connection->connect_errno . ')'
                        . $connection->connect_error);
            }
            return $connection;
        }    
        
        static function selectFromTableOrderBy($table,$field,$order){
            $connection = self::connect();
            $result = $connection->query("SELECT * FROM ". $table ." ORDER BY ". $field ." ".$order);
            $connection->close();
            return $result;
        }
        
        static function selectFromTable($table){
            $connection = self::connect();
            $result = $connection->query("SELECT * FROM ". $table);
            $connection->close();
            return $result;
        }
    }

