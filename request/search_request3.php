<?php

require_once("./request/Connection.php");



$query2 =  "SELECT 
                  technician_name AS 'TECHNICIAN NAME', inspection_date_time AS 'INSPECTION TIME/DATE', branch_name AS 'BRANCH NAME',
		          branch_phone AS 'BRANCH PHONE', branch_email AS 'BRANCH EMAIL', branch_address AS 'BRANCH ADDRESS',
                  branch_gst_registration AS 'BRANCH GST REGISTRATION', branch_fax AS 'BRANCH FAX'
                FROM inspection
                inner join branch
                on inspection.branch_id = branch.branch_id
                inner join vehicle
                on inspection.vehicle_id = vehicle.vehicle_id
                inner join owner
                on vehicle.owner_id = owner.owner_id
                inner join invoice
                on owner.owner_id = invoice.customer_id
                
            ";




if (isset($_POST['submitButton'])){
    $search_term = mysqli_real_escape_string($conn, $_POST['input']);
    $query2 .= "WHERE invoice.invoice_id LIKE '%" .$search_term."%' ";

}

$query = mysqli_query($conn, $query2) or die(mysqli_error($conn));

?>