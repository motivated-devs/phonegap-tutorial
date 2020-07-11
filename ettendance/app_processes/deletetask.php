<?php

header("Access-Control-Allow-Origin: *");
include '../database_config/database_config.php';

$task_id = $_REQUEST['task-id'];
$message = [];

$deletetask = "DELETE FROM task WHERE id = $task_id";
$deletetask = $conn->query($deletetask);
if($deletetask){
    $message = [
        "message" => "Task Deleted Successfuly!"
    ];
}else{
    $message = [
        "message" => mysqli_error($conn)
    ];
}

echo json_encode($message);