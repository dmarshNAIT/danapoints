<?php

// Test connection to DB

$servName = "BURLIEREARTH7-M\\SQLEXPRESS";
$connInfo = array("Database" => "Danabase");

$conn = sqlsrv_connect($servName, $connInfo);
if ($conn) {
    print ("Connected");
} else {
    print_r(sqlsrv_errors(), true);
}