<?php
// if (!isset($_POST['submit'])){
//     header("Location: ../signupForm.html");
//     exit();
// };
debug_to_console($_POST);
require_once "dbconnect.php";
$forename = mysqli_real_escape_string($conn, $_POST["forename"]);
$surname = mysqli_real_escape_string($conn, $_POST["surname"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$confirm_password = mysqli_real_escape_string($conn, $_POST["confpass"]);
$gender = mysqli_real_escape_string($conn, $_POST["gender"]);
$phone =mysqli_real_escape_string($conn, $_POST["phone"]);
$registration_date = date("Y-m-d");

$result = $conn->query
    ("INSERT INTO users (forename, surname, email, password_hash, registration_date, telephone)
        VALUE ($forename, $surname, $email, $password, $registration_date, $phone)
    ");

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
?>