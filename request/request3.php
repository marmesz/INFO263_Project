<?php

require_once("./config/config.php");
//require_once('./getdata.php');

$conn = new mysqli($serverName, $username, $password, $dbName, $port);


if ($conn->connect_error) {
    echo 'Failed to connect to MySql :(';
}

//function get_all_data($conn){
$returns = array();
$query1 =  "SELECT technician_name AS 'TECHNICIAN NAME', inspection_date_time AS 'INSPECTION TIME/DATE', branch_name AS 'BRANCH NAME',
		branch_phone AS 'BRANCH PHONE', branch_email AS 'BRANCH EMAIL', branch_address AS 'BRANCH ADDRESS',
        branch_gst_registration AS 'BRANCH GST REGISTRATION', branch_fax AS 'BRANCH FAX'
FROM inspection
inner join branch
on inspection.branch_id = branch.branch_id;
";
$result =  $conn->query($query1);
if (!$result)
    die ($conn->error);


if ($result -> num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr><td>' . $row['TECHNICIAN NAME'] . '</td><td>' . $row['INSPECTION TIME/DATE'] . '</td><td>' .
            $row['BRANCH NAME'] . '</td><td>' . $row['BRANCH PHONE'] . '</td><td>' . $row['BRANCH EMAIL'] .
            '</td><td>' . $row['BRANCH ADDRESS'] . '</td><td>' . $row['BRANCH GST REGISTRATION'] . '</td><td>' . $row['BRANCH FAX'] . '</td><tr>';
    }
    echo'</table>';

}
else {
    echo '0 result';
}
?>