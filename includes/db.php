<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "cms";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");

if (!$conn) {
    die("Connection failed: s" . mysqli_connect_error());
}

?>