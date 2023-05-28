<?php
// Assuming you have established a database connection
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the reservationId is provided
    if (isset($_POST['reservationId'])) {
        $reservationId = $_POST['reservationId'];

        // Update the status in the database for reservations table
        $sql = "UPDATE reservations SET status = 'catered' WHERE id = $reservationId";
        $result1 = $conn->query($sql);

        // Update the status in the database for online_reservations table
        $sql = "UPDATE online_reservations SET status = 'catered' WHERE id = $reservationId";
        $result2 = $conn->query($sql);

        if ($result1 && $result2) {
            // Redirect to a specific page with a success message in the URL
            header("Location:customers.php?status=success");
            exit();
        } else {
            // Redirect to a specific page with an error message in the URL
            header("Location:settings.php?status=success");
            exit();
        }
    } else {
        // Redirect to a specific page with an error message in the URL
        header("Location:settings.php?status=success");
        exit();
    }
} else {
    // Redirect to a specific page with an error message in the URL
    header("Location:settings.php?status=success");
    exit();
}
?>
