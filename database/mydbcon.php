<?php
session_start();

function dbconnect(){
//create constants for database variables
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DBNAME = 'roomap'; 

//make database connect
$conn = new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME) or die("Connection failed");

return $conn;
}

function close_connection($conn){
    $conn->close();
 }
//test database connection

?>

