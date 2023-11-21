<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate and ensure new password matches confirmation
    if ($newPassword != $confirmPassword) {
        $error_message = "Password and Confirm Password do not match.";
        header("Location: forgetpassword.html?error=" . urlencode($error_message));
        exit();
    }

    // Check if the email exists in the database
    $emailCheckQuery = "SELECT * FROM customer_tbl WHERE email = '$email'";
    $emailCheckResult = $conn->query($emailCheckQuery);

    if ($emailCheckResult->num_rows > 0) {
        // Email exists, proceed to update the password

        // Hash the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update password in the database
        $sql = "UPDATE customer_tbl SET password = '$hashedPassword' WHERE email = '$email'";
        if ($conn->query($sql) === TRUE) {
            // Success message
            $success_message = "Password updated successfully!";
            header("Location: forgetpassword.html?success=" . urlencode($success_message));
            exit();
        } else {
            // Error message
            $error_message = "Error updating password: "  . $conn->error;
            header("Location: forgetpassword.html?error=" . urlencode($error_message));
            exit();
        }
    } else {
        // Email does not exist, display an error message
        $error_message = "Email not found in the database.";
        header("Location: forgetpassword.html?error=" . urlencode($error_message));
        exit();
    }
}

$conn->close();
?>

