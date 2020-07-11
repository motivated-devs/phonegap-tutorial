<?php

header("Access-Control-Allow-Origin: *");
include '../database_config/database_config.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$encrypted_pass = md5($password);

$query = "SELECT * FROM mstusers WHERE username = '$username' and password = '$encrypted_pass'";
$query = $conn->query($query);
$count = mysqli_num_rows($query);

if($count > 0){
    $row = mysqli_fetch_assoc($query);
    $account_name = $row["FirstName"]." ".$row["LastName"];
    $last_id = $row["UserId"];
    echo json_encode([
        "correct" => 1,
        "account_name" => $account_name,
        "last_id" => $last_id
    ]);
}else{
    echo json_encode([
        "correct" => 0,
        "message" => "Incorrect Credentials!"
    ]);
}
