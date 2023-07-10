<?php
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "test"; // Replace with your database name

// Create a connection
$conn = new mysqli($localhost, $root, "", $test);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

// Perform database operations using the connection
// For example, you can insert the form data into a table
$sql = "INSERT INTO test (firstname, lastname, email, password, confirmpassword) VALUES ('$firstname', '$lastname', '$email', '$password', '$confirmpassword')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>