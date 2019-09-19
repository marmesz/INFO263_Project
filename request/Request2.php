<?php

require_once("./config/config.php");
//require_once('./getdata.php');

$conn = new mysqli($serverName, $username, $password, $dbName, $port);


if ($conn->connect_error) {
    echo 'Failed to connect to MySql :(';
}

//function get_all_data($conn){
    $returns = array();
    $query1 =  "SELECT invoice.invoice_id AS 'TAX INVOICE NUMBER', invoice.description AS 'SERVICE DESCRIPTION', 
		invoice.quantity AS 'QUANTITY', invoice.unit_price AS 'UNIT PRICE', round(quantity * unit_price, 2) AS 'AMOUNT', 
        round(quantity * unit_price, 2) AS 'SUBTOTAL', round(quantity * unit_price * 0.15, 2) AS 'GST', 
        round(quantity * unit_price * 1.15, 2) AS 'TOTAL', round(quantity * unit_price * 1.15, 2) AS 'PAID', 
        invoice.date AS 'DTAE', invoice.due_date AS 'DUE DATE'
FROM invoice
inner join owner
on invoice.customer_id = owner.owner_id;
";
    $result =  $conn->query($query1);
    if (!$result)
        die ($conn->error);


if ($result -> num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr><td>' . $row['TAX INVOICE NUMBER'] . '</td><td>' . $row['SERVICE DESCRIPTION'] . '</td><td>' . $row['QUANTITY'] . '</td><td>' . $row['UNIT PRICE'] .
            '</td><td>' . $row['AMOUNT'] . '</td><td>' . $row['SUBTOTAL'] . '</td><td>' . $row['GST'] . '</td><td>' . $row['TOTAL'] .
            '</td><td>' . $row['PAID'] . '</td><td>' . $row['DTAE'] . '</td><td>' . $row['DUE DATE'] . '</td><tr>';
    }
    echo'</table>';

}
else {
    echo '0 result';
}
?>