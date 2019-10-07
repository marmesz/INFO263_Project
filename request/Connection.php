<?php

// This file is used to establish the connection with the MYSQL server
require_once("./config/config.php");

$conn = new mysqli($serverName, $username, $password, $dbName, $port);


if ($conn->connect_error) {
    echo 'Failed to connect to MySql :(';
}
?>