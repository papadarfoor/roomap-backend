<?php
require '../../../database/mydbcon.php';

$connect = dbconnect();

$searchString = $_GET['search_string'];


$sql = "SELECT * FROM buildings WHERE building_name LIKE '%$searchString%'";
$result = mysqli_query($connect,$sql);

$data = array();

while($row = $result->fetch_assoc()){

    $data[] = json_decode($row);

}

echo json_encode($data);

?>