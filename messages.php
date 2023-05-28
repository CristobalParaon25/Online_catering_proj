<?php
	include('connection.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
    $message = $_POST['message'];


	$query = mysqli_query($conn,"SELECT * FROM messages WHERE name = '$name'");
	if (mysqli_num_rows($query)>0)
	{
		echo '<script>alert("existing user")</script>';
		header("location: index.php");
	}
	else
	{
		$add = "insert into messages set name = '".$name."',
                                        email = '".$email."', 
									  message = '".$message."'";
		$res = $conn->query($add);

		if ($res)
			{
				header("location: index.php");
			}
			else
			{
				echo '<script>alert("existing course")</script>';
			}
	}

?>