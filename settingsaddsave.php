<?php
    include('connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];

        $sql = "INSERT INTO users (UserName, Password) VALUES ('$UserName','$Password' )";

        if ($conn->query($sql) === TRUE){
            header("Location:settings.php?status=success");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>