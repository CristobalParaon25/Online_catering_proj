<?php
// Check if the user ID is set
if (isset($_GET['id'])) {
    // Get the user ID from the URL
    $user_id = $_GET['id'];
    
    include('connection.php');
    
    // Construct the DELETE query
    $sql = "DELETE FROM users WHERE id = $user_id";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // If the query is successful, redirect the user to the users page
        header("Location:settings.php?status=danger");
        exit();
    } else {
        // If the query fails, show an error message
        echo "Error deleting user: " . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
