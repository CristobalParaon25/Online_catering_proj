<?php

// Include database connection code
include 'connection.php';

// Retrieve income data from database
$sql = "SELECT MONTH(schedule) AS month, SUM(heads*250) AS total_income FROM reservations GROUP BY month
        UNION
        SELECT MONTH(schedule) AS month, SUM(heads*250) AS total_income FROM online_reservations GROUP BY month ORDER BY month ASC";
$result = $conn->query($sql);

// Create array to hold income data
$data = array();

// Loop through results and add to data array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $month_name = date("F", mktime(0, 0, 0, $row["month"], 1));
        $data[] = array(
            "month" => $month_name,
            "income" => $row["total_income"]
        );
    }
}

// Return income data as JSON
header('Content-Type: application/json');
echo json_encode($data);

?>
