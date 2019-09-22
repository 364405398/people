<?php
    $conn = null;
    function getConnect() {
        $hosthome = "127.0.0.1";
        $database = "football";
        $userName = "root";
        $password = "root";
        global $conn;
        $conn = mysqli_connect($hosthome, $userName, $password) or die (mysql_error());
        mysqli_query( $conn,"set names gbk");
        mysqli_select_db($conn,$database ) or die (mysql_error());
    }

    function closeConnect() {
        global $conn;
        if ($conn) {
            mysqli_close($conn) or die (mysql_error());
        }
    }
?>
