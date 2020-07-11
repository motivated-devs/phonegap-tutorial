<?php

header("Access-Control-Allow-Origin: *");
include '../database_config/database_config.php';

$task_id = $_REQUEST['task-id'];
$task_code = $_REQUEST['task-code'];
$task_name = $_REQUEST['task-name'];
$message = [];

$updatetask = "UPDATE task SET task_code = '$task_code', task_name = '$task_name' WHERE id = $task_id";
$updatetask = $conn->query($updatetask);
if($updatetask){
    $message = [
        "message" => "Task Updated Successfuly!"
    ];
}else{
    $message = [
        "message" => mysqli_error($conn)
    ];
}

echo json_encode($message);