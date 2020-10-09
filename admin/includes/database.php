<?php

require_once("new_config.php");

class Database {

    // create varaible for connection
    public $connection;

    // construct function to run a method
    function __construct() {
        $this->open_db_connection();
    }

    public function open_db_connection() {
        // creating a new object for the connection and apply it to the connection variable
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // cgecking if the connection has errors
        if($this->connection->connect_errno) {
            die("Database connection failed" . $this->connection->connect_error);
        }
    }

    // making a query
    public function query($sql) {
        $result = $this->connection->query($sql);
        $this->confirm_query($result);
        return $result;
    }

    // confirming that the query works
    private function confirm_query($result) {
        if(!$result) {
            die("Query failed" . $this->connection->error);
        }
    }

    public function escape_string($string) {
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }

    public function the_insert_id() {
        return $this->connection->insert_id;
    }
}

$database = new Database();

?>