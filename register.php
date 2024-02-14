<?php
        // Retrieve form data from POST request
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

        // Perform any necessary validation on the data

        // Connect to MySQL database
        $servername = "localhost";
        $username = "username"; // Your MySQL username
        $password = "password"; // Your MySQL password
        $dbname = "database"; // Your MySQL database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to insert data into database
        $sql = "INSERT INTO contacts (firstname, lastname, age, gender, role, faculty, phone, address, email, message)
        VALUES ('$firstname', '$lastname', '$age', '$gender', '$role', '$faculty', '$phone', '$address', '$email', '$message')";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close database connection
        $conn->close();
    ?>
