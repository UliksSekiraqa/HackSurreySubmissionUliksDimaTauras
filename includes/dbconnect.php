<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "MakeItDone";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    echo "<script>console.log( 'connection failed' );</script>";
    die("Connection failed: " . $conn->connect_error);
}
echo "<script>console.log( 'connection established' );</script>";

?>