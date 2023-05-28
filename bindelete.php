<?php
    include('connection.php');
    $id = $_GET['id'];

    $delete_query = "DELETE FROM bin WHERE id = ".$id;
    $result = $conn->query($delete_query);

    if ($result) {
        header("location: bin.php?status=permanentdelete");
    }
?>
