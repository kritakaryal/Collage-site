<?php

$email = $_POST['email'];
// Step 1: Establish connection to MySQL database
$servername = "localhost"; // Your MySQL server name
$username = "wlfdmbbv_mydatabase"; // Your MySQL username
$password = "latest"; // Your MySQL password
$dbname = "wlfdmbbv_mydatabase"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $mymy = $conn -> prepare("insert into emails(email) values(?)");
    $mymy -> bind_param("s",$email);
    $mymy -> execute();
    echo "done" . $email . "ok";
}


$conn->close();
?>
