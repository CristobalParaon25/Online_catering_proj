<?php
	include('connection.php');
	$id = $_POST['hiddenID'];
	$contactName = $_POST['contactName'];
	$orderName = $_POST['orderName'];
	$orderDate = $_POST['orderDate'];
	$address = $_POST['address'];
	$orderTime = $_POST['orderTime'];
	$heads = $_POST['heads'];
	$schedule = $_POST['schedule'];
	$venue = $_POST['venue'];
    $message = $_POST['message'];


	$update = "UPDATE online_reservations SET contactName = '".$contactName."',
										orderName = '".$orderName."',
									  	orderDate = '".$orderDate."',
										  address = '".$address."',
										orderTime = '".$orderTime."',
										    heads = '".$heads."',
									  	 schedule = '".$schedule."', 
										    venue = '".$venue."',
                                          message = '".$message."' where id = ".$id;
	$res = $conn->query($update);

	if ($res){
		header("location: onlinereservation.php?status=success");
	}
?>