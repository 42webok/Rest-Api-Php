<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");


$conn = mysqli_connect("localhost" , "root" , "" , "ajax");

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result , MYSQLI_ASSOC);
if(mysqli_num_rows($result) > 0){
    echo json_encode($rows);
}else{
    echo json_encode(array("message" => "No data found" , "status" => "fail"));
}

?>