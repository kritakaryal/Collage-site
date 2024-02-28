<?php
// Retrieve form data from POST request
$email = $_POST['email'];

// Connect to SQL Server database
$serverName = "localhost"; // Your SQL Server hostname
$connectionInfo = array(
    "Database" => "wlfdmbbv_mydatabase", // Your database name
    "UID" => "wlfdmbbv_mydatabase", // Your database username
    "PWD" => "latest" // Your database password
);
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    die("Connection failed: " . sqlsrv_errors());
}

// Prepare SQL statement to insert data into the 'emails' table
$sql = "INSERT INTO `emails`(`email`) VALUES ('$email')";

// Execute SQL statement
$stmt = sqlsrv_query($conn, $sql);

if ($stmt === false) {
    die("Error: " . sqlsrv_errors());
} else {
    echo "Data inserted successfully" . $email;
}

// Close database connection
sqlsrv_close($conn);
?>
