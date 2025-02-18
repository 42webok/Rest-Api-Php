<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers, Access-Control-Allow-Methods , Content-Type, Authorization, X-Requested-With");


$conn = mysqli_connect("localhost" , "root" , "" , "ajax");

$data = json_decode(file_get_contents("php://input") , true);
$name = mysqli_real_escape_string($conn , $data['name']);
$password = mysqli_real_escape_string($conn , $data['password']);

$sql = "INSERT INTO user (name, password) VALUES ('$name', '$password')";
$result = mysqli_query($conn, $sql);

if($result){
    echo json_encode(array("message" => "Record Inserted Successfully"));
}else{
    echo json_encode(array("message" => "No data found"));
}

?>