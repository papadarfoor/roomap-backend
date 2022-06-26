<?php



$roomDetails = $_POST['room_details'];

/* {
    "id": "1",
    "building_id": "1",
    "room_name": "Baby Section"
} */



$data = array();


$data = json_decode($roomDetails);


echo json_encode($data);

?>