<?php

class DatabaseConnector {

    const HOST = "localhost";
    const USER = "root";
    const PASS = "root";
    const DB = "rockabilly";

    private function connect() {
        $connection = new mysqli(self::HOST, self::USER, self::PASS, self::DB);

        if ($connection->connect_error) {
            die('Connect Error (' . $connection->connect_errno . ')'
                    . $connection->connect_error);
        }
        return $connection;
    }

    static function selectOrderBy($table, $field, $order) {
        $connection = self::connect();
        $result = $connection->query("SELECT * FROM " . $table . " ORDER BY " . $field . " " . $order);
        $connection->close();
        return $result;
    }

    static function select($table) {
        $connection = self::connect();
        $result = $connection->query("SELECT * FROM " . $table);
        $connection->close();
        return $result;
    }

    static function selectEquals($table, $field, $value) {
        $connection = self::connect();
        $result = $connection->query("SELECT * FROM " . $table . " WHERE " . $field . "='" . $value."'");
        $connection->close();
        return $result;
    }

    static function insert($table, $fields, $values) {
        $connection = self::connect();
        $result = $connection->query("INSERT INTO `" . $table . "` " . $fields . " VALUES " . $values);
        $connection->close();
        return $result;
    }

    static function exists($table, $field, $value) {
        $connection = self::connect();
        $result = $connection->query("SELECT 1 FROM " . $table . " WHERE " . $field . "='" . $value."'");
        if($result != TRUE){
            echo $connection->error;
        }
        $connection->close();
        return $result;
    }

}
