<?php

require '../../../database/mydbcon.php';

$connect = dbconnect();

$roomId = $_GET['room_id'];

$sql = "SELECT * FROM pathways WHERE room_id = $roomId AND pathways LIKE '%$searchString%'";
$result = mysqli_query($connect,$sql);

$data = array();

while($row = $result->fetch_assoc()){
$data[] = json_decode($row['pathways']);
}



echo json_encode($data);

?>