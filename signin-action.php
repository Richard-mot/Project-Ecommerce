<?php
require_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a SQL query using a prepared statement
    $stmt = $conn->prepare("SELECT * FROM customer_tbl WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, verify hashed password
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            // Password is correct, authentication successful
            sleep(3);
            header("Location: index.php");
            exit();
        } else {
            // Inside the else blocks where authentication fails
            header("Location: signin.html?error=" . urlencode("username or password is incorrect"));
            exit();
        }
    } else {
        // User not found, authentication failed
        header("Location: signin.html?error=" . urlencode("Invalid user credentials"));
        exit();
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>

