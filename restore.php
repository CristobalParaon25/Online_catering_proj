<?php
    include('connection.php');
    $id = $_GET['id'];

    $select_query = "SELECT * FROM bin WHERE id = ".$id;
    $result = $conn->query($select_query);

    if ($result->num_rows > 0) {
        // move the reservation to the appropriate table
        $row = $result->fetch_assoc();
        if ($row['type'] == 'oncall') {
            $table_name = 'reservations';
        } elseif ($row['type'] == 'online') {
            $table_name = 'online_reservations';
        } else {
            // If the type is not recognized, don't restore the reservation
            die('Error: unrecognized reservation type');
        }
        $insert_query = "INSERT INTO ".$table_name." (id, contactName, orderName, orderDate, address, orderTime, heads, schedule, venue, message, contact) 
                         VALUES (".$row['id'].", '".$row['contactName']."', '".$row['orderName']."', '".$row['orderDate']."', '".$row['address']."', '".$row['orderTime']."', '".$row['heads']."', '".$row['schedule']."', '".$row['venue']."', '".$row['message']."', '".$row['contact']."')";
        $conn->query($insert_query);

        // delete the reservation from the bin table
        $delete_query = "DELETE FROM bin WHERE id = ".$id;
        $conn->query($delete_query);

        if ($row['type'] == 'oncall') {
            header("location: bin.php?status=oncall");
        } elseif ($row['type'] == 'online') {
            header("location: bin.php?status=online");
        }
    }
?>
