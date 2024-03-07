<?php
// Replace these values with your database credentials
$servername = "localhost";
$username = "root";
$password = "nsti";
$dbname = "admission";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL query to insert data into the database
$sql = "INSERT INTO students(first_name, last_name, email, message)
        VALUES ('$firstName', '$lastName', '$email', '$message')";

// Execute the query

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the database connection
$conn->close();

?>