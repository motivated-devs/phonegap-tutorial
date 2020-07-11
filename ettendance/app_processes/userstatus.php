<?php

header("Access-Control-Allow-Origin: *");
include '../database_config/database_config.php';

$location_lat = $_REQUEST['location_lat'];
$location_long = $_REQUEST['location_long'];
$final_loc = $_REQUEST['final_loc'];
$status = $_REQUEST['status'];
$getaccountid = $_REQUEST['getaccountid'];
date_default_timezone_set('Asia/Manila');
$createdate= date('Y-m-d H:i:s', strtotime('+8 hours'));

$insert = "INSERT INTO attendance_logs (UserId, DateTimePresent, LocationLat, LocationLong, LocationString, Status, DateTimeAdded) VALUES($getaccountid, '$createdate', '$location_lat', '$location_long', '$final_loc', $status, '$createdate')";
$insert = $conn->query($insert);
if(!$insert){
    $error = mysqli_error($conn);
    echo json_encode([
        "message" => $error
    ]);
}else{
    $message = ($status > 0) ? "You are now Present!" : "You are absent!" ;
    echo json_encode([
        "message" => $message
    ]);
}