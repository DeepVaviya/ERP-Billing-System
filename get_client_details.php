<?php
// Connect to your database
$conn = new mysqli("localhost", "root", "", "store1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch client details based on the selected client name
$clientName = $_POST['clientName'];
$sql = "SELECT gst_number, invoice_number FROM customers WHERE customer_name = '$clientName'";
$result = $conn->query($sql);

// Store client details in an array
$clientDetails = [];
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $clientDetails['gst_number'] = $row['gst_number'];
    $clientDetails['invoice_number'] = $row['invoice_number'];
}

// Output the client details as JSON
echo json_encode($clientDetails);

$conn->close();
?>
