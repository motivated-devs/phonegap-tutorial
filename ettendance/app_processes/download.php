<?php

header("Content-Type: application/vnd.ms-excel");
$createdate= date('Y-m-d H:i:s', strtotime('+8 hours'));
header("Content-disposition: attachment; filename=EttendanceReport-".$createdate.".xls");
include '../database_config/database_config.php';

$query = "SELECT mstusers.FirstName, mstusers.LastName, attendance_logs.DateTimePresent, attendance_logs.LocationLat, attendance_logs.LocationLong, attendance_logs.LocationString, (CASE WHEN attendance_logs.Status = 1 THEN 'PRESENT' ELSE 'ABSENT' END) as Status, attendance_logs.DateTimeAdded FROM `attendance_logs` JOIN mstusers ON attendance_logs.UserId = mstusers.UserId";
$query = $conn->query($query);
$output = '';
$no = 0;
$output .= '
<style>
table{
    border: 1px solid;
    border-collapse: collapse;
}

th, tr, td{
    border: 1px solid;
}
</style>
<table>
    <thead>
        <tr>
          <th>No.</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Datetime Present</th>
          <th>Location String</th>
          <th>Status</th>
        </tr>
</thead>';
while($row = mysqli_fetch_assoc($query)){
    $no++;
    $output .= '
        <tbody>
        <tr>
            <td>
                '.$no.'
            </td>
            <td>
                '.$row["FirstName"].'
            </td>
            <td>
                '.$row["LastName"].'
            </td>
            <td>
                '.$row["DateTimePresent"].'
            </td>
            <td>
                '.$row["LocationString"].'
            </td>
            <td>
                '.$row["Status"].'
            </td>
        </tr>
        </tbody>
    ';
}
$output .= '
</table>';
echo $output;