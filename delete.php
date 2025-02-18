<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers, Access-Control-Allow-Methods , Content-Type, Authorization, X-Requested-With");


$conn = mysqli_connect("localhost" , "root" , "" , "ajax");

$data = json_decode(file_get_contents("php://input") , true);
$id = $data['id'];

$sql = "DELETE FROM user WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if($result){
    echo json_encode(array("message" => "Data Deleted Successfully"));
}else{
    echo json_encode(array("message" => "No data found"));
}

?>