<?php
class Database {
    // Declare and initialize database variables
    private $username = 'Talique200535876';
    private $password = 'bx631FMhMx';
    private $hostname = '172.31.22.43';
    private $dbName = 'Talique200535876';
    private $connection;

    // Function to create the connection to the database
    public function __construct() {
        // If there's not a connection then make one using the variables
        if (!isset($this->connection)) { 
            $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName);
            // If there's no connection, show an error
         } else {
            echo '<p>Error! Cannot connect to the database!</p> ' . mysqli_connect_errno();
            echo mysqli_connect_error();
        }
    }
    
    // Function to get the connection from the database
    public function dbConnection() {
        return $this->connection;
    } 
}
?>
