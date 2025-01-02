<?php

class Database {

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "mybook_db";

    // Function to connect to the database
    function connect() {

        $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        return $connection;
    }

    // Function to execute SELECT queries
    function read($query) {

        $conn = $this->connect();
        $result = mysqli_query($conn, $query); // Executes the query and assigns the result to $result

        // Checks if the query execution was successful
        if(!$result) {     // $result == false тоже самое что и !$result
            return false;
        } else {
            $data = false;
            while($row = mysqli_fetch_assoc($result)) {  // Fetches data from the query result
                $data[] = $row;
            }
            return $data;
        }
    }

    // Function to execute INSERT, UPDATE, DELETE queries
    function save($query) {

        $conn = $this->connect();
        $result = mysqli_query($conn, $query); // Executes the query and assigns the result to $result

        // Checks if the query execution was successful
        if(!$result) {     // $result == false тоже самое что и !$result
            return false;
        } else {
            return true;
        }
    }
}

$DB = new Database();
