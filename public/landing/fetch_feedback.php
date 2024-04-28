<?php
require_once "db_connection.php"; // Include the database connection file

// SQL query to fetch customer names
$sql = "SELECT customer_name FROM tbl_feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Customer Name: " . $row["customer_name"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
