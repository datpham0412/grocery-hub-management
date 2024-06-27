<?php 

// ESTABLISHING CONNECTION TO DATABASE
function openConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "market_database";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    return $connection;
}

// CLOSING CONNECTION TO DATABASE 
function closeConnection($connection) {
    $connection->close();
}

?>
