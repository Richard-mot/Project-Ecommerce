<?php
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute SQL query to insert data into the database
    $stmt = $conn->prepare("INSERT INTO customer_tbl (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        // Close the prepared statement
        $stmt->close();

        // Redirect to the sign-in page
        header("Location: signin.html");
        exit(); // Ensure that no further code is executed after the header is sent
    } else {
        $registrationMsg = "Error: " . $stmt->error;
    }

    // Close the database connection
    $conn->close();

    // Set the registration message in the span using JavaScript
    echo '<script>document.getElementById("registration-msg").innerHTML = "' . $registrationMsg . '";</script>';
}
?>
