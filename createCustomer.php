<?php
// Include database connection script
include('./constant/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $customerName = $_POST['customerName'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $invoiceNumber = $_POST['invoiceNumber']; 
    // Debugging lines
//echo "Value of \$_POST['invoiceNumber']: " . $_POST['invoiceNumber'] . "<br>";
//echo "Value of \$invoiceNumber variable: " . $invoiceNumber . "<br>";
$sql = "INSERT INTO customers (customer_name, gst_number, email, address, invoice_number) VALUES ('$customerName', '$contactNumber', '$email', '$address', '$invoiceNumber')";


    if ($connect->query($sql) === TRUE) {
        // If the insertion is successful
        echo "New customer record created successfully";
    } else {
        // If there is an error in the insertion
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

// Close the database connection
$connect->close();
?>
