<?php

header("Access-Control-Allow-Origin: *");
include '../database_config/database_config.php';

$gettask = "SELECT * FROM task";
$gettask = $conn->query($gettask);
$html = '';
if($gettask->num_rows > 0){
    while($task = mysqli_fetch_assoc($gettask)){
        $html .= '
        <li>
            <div class="align-middle-parent">
                <div class="align-middle-child">
                    <div>
                        <input type="hidden" class="task-id" value="'.$task["id"].'">
                        <div><label>Task Code: <b class="task-code">'.$task["task_code"].'</b></label></div>
                        <div><label>Task Name: <b class="task-name">'.$task["task_name"].'</b></label></div>
                        <button class="btn btn-warning btn-edit" type="button">Edit Task</button>
                        <button class="btn btn-danger btn-delete" type="button">Delete Task</button>
                    </div>
                </div>
            </div>
        </li>
        ';
    }
}else{
    $html .= '
    <li><h4 class="text-muted">No Task Available!</h4></li>
    ';
}

echo $html;