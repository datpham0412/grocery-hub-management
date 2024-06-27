<?php 

// ESTABLISHING CONNECTION TO DATABASE
function openConnection() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "gtg";

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: %s\n". $connection -> error);

    return $connection;
}

//CLOSING CONNECTION TO DATABASE 
function closeConnection($connection) {
    $connection -> close();
}

?>
