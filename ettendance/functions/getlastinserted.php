<?php

function getlastinserted($conn, $column_name, $table_name){
    $query = "SELECT ".$column_name." FROM ".$table_name." ORDER BY date_added DESC LIMIT 1";
    $query = $conn->query();
    $row = mysqli_fetch_assoc($query);
    
    return $row;
}