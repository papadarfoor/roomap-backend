<?php
session_start();

function dbconnect(){
//create constants for database variables
$HOSTNAME = 'eu-cdbr-west-02.cleardb.net';
$USERNAME = 'b0c2770297daa0';
$PASSWORD = '0928c090';
$DBNAME = 'heroku_70a5e68d1e11b82'; 

//make database connect
$conn = new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME) or die("Connection failed");

return $conn;
}

function close_connection($conn){
    $conn->close();
 }
//test database connection

?>

