<?php
    include('connection.php');
    $id = $_GET['id'];

    $select_query = "SELECT * FROM reservations WHERE id = ".$id;
    $result = $conn->query($select_query);

    if ($result->num_rows > 0) {
        // move the reservation to the bin table
        $row = $result->fetch_assoc();
        $insert_query = "INSERT INTO bin (id, contactName, orderName, orderDate, address, orderTime, heads, schedule, venue, message, contact,type) 
                         VALUES (".$row['id'].", '".$row['contactName']."', '".$row['orderName']."', '".$row['orderDate']."', '".$row['address']."', '".$row['orderTime']."', '".$row['heads']."', '".$row['schedule']."', '".$row['venue']."', '".$row['message']."','".$row['contact']."','oncall')";
        $conn->query($insert_query);

        // delete the reservation from the reservations table
        $delete_query = "DELETE FROM reservations WHERE id = ".$id;
        $conn->query($delete_query);

        header("Location:reservation.php?status=warning");
    }
?>
