<?php
	include('connection.php');
	$contactName = $_POST['contactName'];
	$orderName = $_POST['orderName'];
	$address = $_POST['address'];
	$orderTime = $_POST['orderTime'];
	$heads = $_POST['heads'];
	$schedule = $_POST['schedule'];
	$contact = $_POST['contact'];
	$venue = $_POST['venue'];

	// Check if the reservation schedule already exists three times
	$query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM (
	    SELECT schedule FROM reservations WHERE schedule = '$schedule'
	    UNION ALL
	    SELECT schedule FROM online_reservations WHERE schedule = '$schedule'
	) AS combined_reservations");

	$row = mysqli_fetch_assoc($query);
	$count = $row['count'];

	if ($count >= 3) {
	    header("Location: reservation.php?status=full_sched");
	    exit;
	}

	$query = mysqli_query($conn, "SELECT * FROM reservations WHERE contactName = '$contactName'");
	if (mysqli_num_rows($query) > 0) {
		header("Location: reservation.php?status=exist");
		exit;
	} else {
		$add = "INSERT INTO reservations SET contactName = '$contactName',
		                                  orderName = '$orderName',
		                                  address = '$address',
		                                  orderTime = '$orderTime',
		                                  heads = '$heads',
		                                  schedule = '$schedule',
		                                  contact = '$contact',
		                                  venue = '$venue'";
		$res = $conn->query($add);

		if ($res) {
			header("Location: reservation.php?status=success");
			exit;
		} else {
			$_SESSION['status'] = "Saved Error";
			$_SESSION['status_code'] = "error";
		}
	}
?>
