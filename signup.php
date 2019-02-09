<?php
if (!isset($_POST['submit'])){
    header("Location: ../signup.php");
    exit();
};
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
    ("INSERT INTO users (forename, surname, email, password_hash, registration_date, gender, telephone)
        VALUE ($forename, $surname, $email, $password, $registration_date, $gender, $phone)
    ");