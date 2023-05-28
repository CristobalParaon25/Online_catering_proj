<?php
	session_start();
	include('connection.php');

	$Username = $_POST['username'];
	$Password = $_POST['password'];

	$sql = "select *, CONCAT(users.`UserName`) AS uname from users where UserName ='".$Username."' and Password ='".$Password."'";
                  
        $res = mysqli_query($conn, $sql);
            if($row = mysqli_fetch_array($res))
            {
            	$_SESSION['hasLog'] = "1";
				$_SESSION['UserName'] = $row['uname'];
            	echo "1";
            }
            else{
				echo "<div class = 'alert alert-danger'>Invalid username or password</div>";
			}
?>