<?php
namespace Database;

class Database
{
    // WHY IS IT DIFFERENT FROM MYSQL!?
    private static $servername = "serverName\\sqlexpress";
    private static $connInfo = array(
        "Database" => "dbName",
        "UID" => "username",
        "PWD" => "password",
    );

    private static $conn = null;

    public static function connect($servername, $connInfo)
    {
        self::$conn = sqlsrv_connect($servername, $connInfo);

        if (self::$conn) {
            die("" . self::$conn);
        }
    }
}