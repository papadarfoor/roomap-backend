<?php
require '../../../database/mydbcon.php';

$connect = dbconnect();

$searchString = $_GET['search_string'];
$buildingId = $_GET['building_id'];


$sql = "SELECT * FROM rooms WHERE building_id = $buildingId AND room_name LIKE '%$searchString%'";
$result = mysqli_query($connect,$sql);

$data = array();

while($row = $result->fetch_assoc()){

    $data[] = $row;

}

echo json_encode($data);

?>