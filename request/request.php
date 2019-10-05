<?php
require_once("./config/config.php");
require_once("./request/Connection.php");

$customer_query =  "SELECT concat(owner_fname, ' ', owner_lname) AS 'NAME', owner_email AS 'EMAIL', owner_phone AS 'PHONE',
                    vehicle_registration AS 'VEHICLE REGISTRATION', vehicle_model AS 'VEHICLE MODEL', vehicle_make AS 'VEHICLE MAKE',
                    vehicle_year AS 'YEAR', vehicle_body_type AS 'BODY TYPE', vehicle_chassis AS 'CHASSIS NUMBER', vehicle_odometer_reading AS 'ODOMETER READING'
                    FROM owner
                    inner join vehicle
                    on owner.owner_id = vehicle.owner_id
                    inner join invoice
                    on owner.owner_id = invoice.customer_id";

$invoice_query  =  "SELECT 
                    invoice.invoice_id AS 'TAX INVOICE NUMBER', invoice.description AS 'SERVICE DESCRIPTION', 
                    invoice.quantity AS 'QUANTITY', invoice.unit_price AS 'UNIT PRICE', round(quantity * unit_price, 2) AS 'AMOUNT', 
                    round(quantity * unit_price, 2) AS 'SUBTOTAL', round(quantity * unit_price * 0.15, 2) AS 'GST', 
                    round(quantity * unit_price * 1.15, 2) AS 'TOTAL', round(quantity * unit_price * 1.15, 2) AS 'PAID', 
                    invoice.date AS 'DATE', invoice.due_date AS 'DUE DATE'
                    FROM invoice
                    inner join owner
                    on invoice.customer_id = owner.owner_id
                    ";

$garage_query  =  "SELECT technician_name AS 'TECHNICIAN NAME', inspection_date_time AS 'INSPECTION TIME/DATE', branch_name AS 'BRANCH NAME',
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
                    on owner.owner_id = invoice.customer_id";

$alignment_query =  "SELECT rear_axle_camber_left_before AS '1', 
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

?>
