<?php
require '../../../database/mydbcon.php';

$connect = dbconnect();

$buildingId = $_GET['building_id'];

$sql = "SELECT * FROM rooms WHERE building_id = $buildingId";
$result = mysqli_query($connect,$sql);

$data = array();

while($row = $result->fetch_assoc()){
$data[] = $row;
}

echo json_encode($data);

?>