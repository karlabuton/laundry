<?php
require_once "db_connection.php"; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["customer_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $feedback_type = $_POST["feedback_type"];
    $description = $_POST["description"];
    
    // Prepare SQL statement to insert feedback into the database
    $sql = "INSERT INTO tbl_feedback (customer_name, email, phone_number, feedback_type, description) 
            VALUES ('$name', '$email', '$phone_number', '$feedback_type', '$description')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Assuming the form submission is successful, redirect to index.html
    header("Location: index.html");
    exit; // Make sure to exit after redirection to prevent further execution
}

// Close database connection
$conn->close();
?>
