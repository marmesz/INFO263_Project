<?php

require_once("./request/Connection.php");



$query2 =  "SELECT concat(owner_fname, ' ', owner_lname) AS 'NAME', owner_email AS 'EMAIL', owner_phone AS 'PHONE',
            vehicle_registration AS 'VEHICLE REGISTRATION', vehicle_model AS 'VEHICLE MODEL', vehicle_make AS 'VEHICLE MAKE',
            vehicle_year AS 'YEAR', vehicle_body_type AS 'BODY TYPE', vehicle_chassis AS 'CHASSIS NUMBER', vehicle_odometer_reading AS 'ODOMETER READING'
        FROM owner
        inner join vehicle
        on owner.owner_id = vehicle.owner_id
        inner join invoice
        on owner.owner_id = invoice.customer_id
        
            ";




if (isset($_POST['submitButton'])){
    $search_term = mysqli_real_escape_string($conn, $_POST['input']);


    $query2 .= "WHERE invoice.invoice_id LIKE '%" .$search_term."%' ";

}

$query = mysqli_query($conn, $query2) or die(mysqli_error($conn));

?>