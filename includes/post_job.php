<?php require_once "dbconnect.php";
    $topic = mysqli_real_escape_string($conn, $_POST["topic"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $location = mysqli_real_escape_string($conn, $_POST["location"]);
    $type_of_payment =mysqli_real_escape_string($conn, $_POST["phone"]);
    $creation_date = date("Y-m-d");

    $insertQuery = "INSERT INTO tasks (topic, description, price, location, type_of_payment, creation_date)
                    VALUES ('$topic', '$description', '$price', '$location', '$type_of_payment', '$creation_date')";
    $conn->query($insertQuery);

    $conn->close();
?>