<?php
require '../../../database/mydbcon.php';

$connect = dbconnect();

$searchString = $_GET['search_string'];
$rromId = $_GET['room_id'];


$sql = "SELECT * FROM pathways WHERE room_id = $roomId AND pathways LIKE '%$searchString%'";
$result = mysqli_query($connect,$sql);

$data = array();

while($row = $result->fetch_assoc()){

    $data[] = $row;

}

echo json_encode($data);

?>