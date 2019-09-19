<!--/**
 *  Keep your requests in here.
 */-->
<?php
require_once("./config/config.php");
//require_once('./getdata.php');

$conn = new mysqli($serverName, $username, $password, $dbName, $port);


if ($conn->connect_error) {
    echo 'Failed to connect to MySql :(';
}

//function get_all_data($conn){
    $returns = array();
    $query1 =  "SELECT concat(owner_fname, ' ', owner_lname) AS 'NAME', owner_email AS 'EMAIL', owner_phone AS 'PHONE',
		vehicle_registration AS 'VEHICLE REGISTRATION', vehicle_model AS 'VEHICLE MODEL', vehicle_make AS 'VEHICLE MAKE',
        vehicle_year AS 'YEAR', vehicle_body_type AS 'BODY TYPE', vehicle_chassis AS 'CHASSIS NUMBER', vehicle_odometer_reading AS 'ODOMETER READING'
FROM owner
inner join vehicle
on owner.owner_id = vehicle.owner_id;
";
    $result =  $conn->query($query1);
    if (!$result)
        die ($conn->error);

    /*!for ($j = 0 ;$j < $result->num_rows ; ++$j){
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        print_r($row);
        $item1[] = new getdata($row['NAME'], $row['EMAIL'], $row['PHONE'], $row['VEHICLE REGISTRATION'],
            $row['VEHICLE MODEL'], $row['VEHICLE MAKE'], $row['YEAR'], $row['BODY TYPE'], $row['CHASSIS NUMBER'], $row['CHASSIS NUMBER']);
    }
    $result->close();


    $item1 = json_encode($item1);
    return $item1;!*/
if ($result -> num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr><td>' . $row['NAME'] . '</td><td>' . $row['EMAIL'] . '</td><td>' . $row['PHONE'] . '</td><td>' . $row['VEHICLE REGISTRATION'] .
            '</td><td>' . $row['VEHICLE MODEL'] . '</td><td>' . $row['VEHICLE MAKE'] . '</td><td>' . $row['YEAR'] . '</td><td>' . $row['BODY TYPE'] .
            '</td><td>' . $row['CHASSIS NUMBER'] . '</td><td>' . $row['CHASSIS NUMBER'] . '</td><tr>';
    }
    echo'</table>';

}
else {
    echo '0 result';
}

//function printItems($array)
//{
//    echo "<pre>";
//    foreach ($array as $item1)
//    {
//        echo $item1->display() . "<br>";
//    }
//
//
//    echo "</pre>";
//}
//
//printItems($item1);
    //print_r($result);

//    $decoded = json_encode($result);
//    print_r($decoded);

//}
?>
