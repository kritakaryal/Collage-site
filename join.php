<?php
// Step 1: Establish connection to MySQL database
$servername = "localhost"; // Your MySQL server name
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "your_database"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Assuming your form field name is 'email'
}

// Step 3: Sanitize and validate input data (you should implement this according to your requirements)

// Step 4: Insert data into MySQL database
$sql = "INSERT INTO your_table_name (email) VALUES ('$email')"; // Modify this query according to your table structure and form fields

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
