<?php
namespace Database;

class Database
{
    // WHY IS IT DIFFERENT FROM MYSQL!?
    private static $servername = "BURLIEREARTH7-M\\SQLEXPRESS";
    private static $connInfo = array(
        "Database" => "Danabase",
        "UID" => "Tollefson",
        "PWD" => "",
    );


    function __construct($servername, $connInfo)
    {
        // Connect to MS SQL database
        $conn = sqlsrv_connect($servername, $connInfo);
        if (!$conn) {
            die(print_r(sqlsrv_errors(), true));
        } else {
            print ("Connected!");
        }
    }
}

$connection = new Database("BURLIEREARTH7-M\\SQLEXPRESS", array(
    "Database" => "Danabase"
));