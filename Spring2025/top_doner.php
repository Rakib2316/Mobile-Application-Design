<?php
include 'db_connect.php';

// Get yesterday's date range
$yesterday_start = date('Y-m-d 00:00:00', strtotime('-1 day'));
$yesterday_end = date('Y-m-d 23:59:59', strtotime('-1 day'));

// Fetch top donor (excluding anonymous donations)
$sql = "SELECT fullname, amount 
        FROM donation_records 
        WHERE anonymous='No' 
        AND donation_datetime BETWEEN '$yesterday_start' AND '$yesterday_end'
        ORDER BY amount DESC 
        LIMIT 1";

$result = $conn->query($sql);

$topDonor = null;

if ($result->num_rows > 0) {
    $topDonor = $result->fetch_assoc();
}

$conn->close();
?>
