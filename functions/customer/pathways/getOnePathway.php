<?php
require '../../../database/mydbcon.php';

$connect = dbconnect();

$roomId = $_GET['room_id'];
$roomName = $_GET['room_name'];

$sql = "SELECT * FROM pathways WHERE room_id = $roomId AND pathways LIKE '%$roomName%'";
$result = mysqli_query($connect,$sql);


while($row = $result->fetch_assoc()){

    $data = json_decode($row['pathways']);

}

echo json_encode($data->room->pathway_direction);

?>