<?php
require '../../../database/mydbcon.php';

$connect = dbconnect();

$sql = "SELECT * FROM buildings";
$result = mysqli_query($connect,$sql);

$data = array();

while($row = $result->fetch_assoc()){
$data[] = $row;
}

echo json_encode($data);

?>