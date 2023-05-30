<?php
    include('connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];
        $Role = $_POST['Role'];

        $sql = "INSERT INTO users (UserName, Password, Role) VALUES ('$UserName','$Password','$Role' )";

        if ($conn->query($sql) === TRUE){
            header("Location:settings.php?status=success");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>