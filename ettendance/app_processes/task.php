<?php

header("Access-Control-Allow-Origin: *");
include '../database_config/database_config.php';

$task_code = $_REQUEST['task-code'];
$task_name = $_REQUEST['task-name'];
$message = [];

$insertask = "INSERT INTO task (task_code, task_name) VALUES ('$task_code', '$task_name')";
$insertask = $conn->query($insertask);

if($insertask){
    $message = [
        'message' => "Task Created Successfuly!"
    ];
}else{
    $message = [
        'message' => mysqli_error($conn)
    ];
}

echo json_encode($message);