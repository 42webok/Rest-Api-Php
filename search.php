<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");


$conn = mysqli_connect("localhost" , "root" , "" , "ajax");

$data = json_decode(file_get_contents("php://input") , true);
$search = mysqli_real_escape_string($conn , $data['search']);

$sql = "SELECT * FROM user WHERE `name` LIKE '%{$search}%'";
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result , MYSQLI_ASSOC);
if(mysqli_num_rows($result) > 0){
    echo json_encode($rows);
}else{
    echo json_encode(array("message" => "No Search found" , "status" => "fail"));
}

?>