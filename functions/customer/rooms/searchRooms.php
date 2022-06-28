<?php
require '../../../database/mydbcon.php';

$connect = dbconnect();

$searchString = $_GET['search_string'];


$sql = "SELECT * FROM rooms WHERE room_name LIKE '%$searchString%'";
$result = mysqli_query($connect,$sql);

$data = array();

while($row = $result->fetch_assoc()){

    $data[] = $row;

}

echo json_encode($data);

?>