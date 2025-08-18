<?php
// Connect to your database
$conn = new mysqli("localhost", "root", "", "store1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch client names from the database
$sql = "SELECT customer_name FROM customers";
$result = $conn->query($sql);

// Store client names in an array
$clients = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $clients[] = $row['customer_name'];
    }
}

// Output the client names as JSON
echo json_encode($clients);

$conn->close();
?>
