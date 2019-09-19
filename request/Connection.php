<?php

require_once("./config/config.php");
//require_once('./getdata.php');

$conn = new mysqli($serverName, $username, $password, $dbName, $port);


if ($conn->connect_error) {
    echo 'Failed to connect to MySql :(';
}
?>