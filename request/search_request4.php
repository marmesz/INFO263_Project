<?php

require_once("./request/Connection.php");



$query2 =  "SELECT rear_axle_camber_left_before AS '1', 
	rear_axle_camber_left_actual  AS '2', 
	rear_axle_camber_right_before AS '3', 
    rear_axle_camber_right_actual  AS '4',
    rear_axle_camber_cross_before  AS '5', 
    rear_axle_camber_cross_actual  AS '6', 
    rear_axle_toe_left_before  AS '7', 
	rear_axle_toe_left_actual  AS '8',
    rear_axle_toe_right_before  AS '9', 
    rear_axle_toe_right_actual  AS '10', 
    rear_axle_toe_total_before  AS '11', 
    rear_axle_toe_total_actual  AS '12', 
    rear_axle_geometrical_driving_axis_before  AS '13', 
    rear_axle_geometrical_driving_axis_actual  AS '14', 
    front_axle_camber_left_before  AS '15', 
    front_axle_camber_left_actual  AS '16',
    front_axle_camber_right_before  AS '17', 
    front_axle_camber_right_actual  AS '18', 
    front_axle_camber_cross_before  AS '19', 
    front_axle_camber_cross_actual  AS '20', 
    front_axle_caster_left_before  AS '21', 
	front_axle_caster_left_actual  AS '22',
	front_axle_caster_right_before  AS '23', 
	front_axle_caster_right_actual  AS '24', 
    front_axle_caster_cross_before  AS '25', 
    front_axle_caster_cross_actual  AS '26', 
    front_axle_SAI_left_before  AS '27', 
	front_axle_SAI_left_actual  AS '28',
    front_axle_SAI_right_before  AS '29', 
    front_axle_SAI_right_actual AS '30', 
    front_axle_SAI_cross_before  AS '31', 
    front_axle_SAI_cross_actual AS '32',  
    front_axle_track_differential_angle_left_before  AS '33', 
    front_axle_track_differential_angle_left_actual  AS '34', 
    front_axle_track_differential_angle_right_before AS '35', 
    front_axle_track_differential_angle_right_actual AS '36', 
    front_axle_toe_left_before AS '37',
    front_axle_toe_left_actual AS '38',
    front_axle_toe_right_before AS '39', 
    front_axle_toe_right_actual AS '40', 
    front_axle_toe_total_before AS '41', 
    front_axle_toe_total_actual AS '42', 
    front_axle_setback_before AS '43', 
    front_axle_setback_actual AS '44', 
    front_axle_max_steering_lock_left_steer_left_before AS '45', 
    front_axle_max_steering_lock_left_steer_left_actual AS '46', 
    front_axle_max_steering_lock_left_steer_right_before AS '47',
    front_axle_max_steering_lock_left_steer_right_actual AS '48', 
    front_axle_max_steering_lock_right_steer_left_before AS '49',
    front_axle_max_steering_lock_right_steer_left_actual AS '50',
    front_axle_max_steering_lock_right_steer_right_before AS '51', 
    front_axle_max_steering_lock_right_steer_right_actual AS '52'  
            FROM inspection
            inner join vehicle
            on inspection.vehicle_id = vehicle.vehicle_id
            inner join owner
            on vehicle.owner_id = owner.owner_id
            inner join invoice
            on owner.owner_id = invoice.customer_id
            ";




if (isset($_POST['submitButton'])){
    $search_term = mysqli_real_escape_string($conn, $_POST['input']);


    $query2 .= "WHERE invoice_id LIKE '%" .$search_term."%' ";

}
/*if ($query2 -> num_rows = 0) {
    echo '0';
}*/

$query = mysqli_query($conn, $query2) or die(mysqli_error($conn));
?>