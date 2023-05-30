<?php
	session_start();
	include('connection.php');

	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Role = $_POST['role'];

	$sql = "SELECT *, CONCAT(users.`UserName`) AS uname FROM users WHERE UserName ='".$Username."' AND Password ='".$Password."' AND Role = '".$Role."'";
                  
    $res = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_array($res)) {
    	$_SESSION['hasLog'] = "1";
		$_SESSION['UserName'] = $row['uname'];
		$_SESSION['Role'] = $row['Role'];
    	echo "1";
    } else {
		echo "<div class='alert alert-danger'>Invalid username or password</div>";
	}
?>
