<?php
require_once "dbconnect.php";
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

$pass_hash = password_hash($password, PASSWORD_DEFAULT);

debug_to_console( $_POST );

$emailSearchQuery = "SELECT UserID, Password_hash
                     FROM users
                     WHERE email = '$email'";
$result = $conn->query($emailSearchQuery);
if ($result == NULL){
    echo "<script>console.log( 'result is null' )</script>";
}
else {
    echo "<script>console.log( 'result is not null' )</script>";
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['Password_hash']))
    {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['UserID'] = $user['UserID'];
        echo "<script>console.log( 'Logged in' )</script>";
    }
}

$conn->close();

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
?>