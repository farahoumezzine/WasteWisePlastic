<?php
// Database configuration
require './Database.php';

$db = new Database();
$conn = $db->getConnection();

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $gender = $_POST["gender"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    // Insert data into the database
    $sql = "INSERT INTO users (fullName, userName, email, phoneNumber, gender, password) VALUES
     ('$fullName', '$userName', '$email', '$phoneNumber', '$gender', '$password')";

    if ($db->conn->query($sql) === TRUE) {
            header("location:afterregister.php");

    } else {
        echo "Error: " . $sql . "<br>" . $db->conn->error;
    }
}

// Close the database connection
$db->closeConnection();
?>
