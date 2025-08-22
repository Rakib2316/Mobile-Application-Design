<?php
include 'db_connect.php'; // এখানে connection include করলাম

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $payment_method = $conn->real_escape_string($_POST['payment']);
    $transaction_id = $conn->real_escape_string($_POST['transaction']);
    $donation_datetime = $conn->real_escape_string($_POST['datetime']);
    $phone = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : NULL;
    $address = isset($_POST['address']) ? $conn->real_escape_string($_POST['address']) : NULL;
    $anonymous = isset($_POST['anonymous']) ? $conn->real_escape_string($_POST['anonymous']) : 'No';

    $sql = "INSERT INTO donation_records 
    (fullname, email, amount, payment_method, transaction_id, donation_datetime, phone, address, anonymous)
    VALUES ('$fullname', '$email', '$amount', '$payment_method', '$transaction_id', '$donation_datetime', '$phone', '$address', '$anonymous')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Thank you for your donation, $fullname!</h2>";
        echo "<p>Your donation has been recorded successfully.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

//$conn->close();
?>
