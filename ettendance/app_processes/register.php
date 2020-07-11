<?php
header("Access-Control-Allow-Origin: *");
include '../database_config/database_config.php';

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$middle_name = $_REQUEST['username'];
$gender = $_REQUEST['gender'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
date_default_timezone_set('Asia/Manila');
$createdate= date('Y-m-d H:i:s', strtotime('+8 hours'));

$encrypted_pass = md5($password);

$insert = "INSERT INTO mstusers (FirstName, LastName, MiddleName, Gender, Username, Password, date_added) VALUES ('$first_name', '$last_name', '$middle_name', '$gender', '$username', '$encrypted_pass', '$createdate')";
$insert = $conn->query($insert);

$account_name = $first_name." ".$last_name;

if($insert){
    $last_id = $conn->insert_id;
    echo json_encode([
        "message" => "User Saving Successes!",
        "account_name" => $account_name,
        "account_id" => $last_id
    ]);
}else{
    echo mysqli_error($conn);
}