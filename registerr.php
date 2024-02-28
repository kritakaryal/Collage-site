<?php
if(isset($_POST['btn'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $faculty = $_POST['faculty'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $servername = "localhost"; // Your MySQL server name
    $username = "wlfdmbbv_mydatabase"; // Your MySQL username
    $password = "latest"; // Your MySQL password
    $dbname = "wlfdmbbv_mydatabase"; // Your MySQL database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "INSERT INTO contacts (firstname, lastname, age, gender, role, faculty, phone, address, email, message)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssisssssss", $firstname, $lastname, $age, $gender, $role, $faculty, $phone, $address, $email, $message);
        $stmt->execute();
        echo "done " . $firstname . " " . $lastname;
    }

    $conn->close();
}
?>
