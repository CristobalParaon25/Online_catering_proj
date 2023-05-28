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
	$contact = $_POST['contact'];
	$venue = $_POST['venue'];


	$update = "UPDATE reservations SET contactName = '".$contactName."',
										orderName = '".$orderName."',
									  	orderDate = '".$orderDate."',
										  address = '".$address."',
										orderTime = '".$orderTime."',
										    heads = '".$heads."',
									  	 schedule = '".$schedule."',
										  contact = '".$contact."',
										    venue = '".$venue."' where id = ".$id;
	$res = $conn->query($update);

	if ($res){
		header("location: reservation.php?status=success");
	}
?>