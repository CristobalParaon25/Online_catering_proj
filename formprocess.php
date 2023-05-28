<?php
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form_id"] == "form1") {

  // Validate form fields
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);

  if (empty($name) || empty($email) || empty($message)) {
    // Display error message
    echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please fill out all fields!',
            })
          </script>";
  } else {
      // Display error message
      echo "<script>
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong. Please try again later!',
              })
            </script>";
    }
  

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
header("Location: index.php");
exit();
?>
