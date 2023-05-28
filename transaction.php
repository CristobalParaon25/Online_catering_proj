<?php
session_start();

include('connection.php');
// $haslog = (isset($_SESSION['hasLog'])?$_SESSION['hasLog']:0);

if (isset($_SESSION['hasLog'])) {
    $haslog = $_SESSION['hasLog'];
} else {
    $haslog = 0;
}

if (empty($haslog)) {
    header("location: login.php");
    exit;
}

// $sql = "select * from residents ORDER BY firstName DESC";
// $results = $conn->query($sql);
// $query = "SELECT * FROM `attendance` WHERE student_id = '2110006-2'";
// $query = "SELECT a.*, e.e_name
//     FROM attendance a
//     INNER JOIN events e ON a.e_id = e.e_id";

// $results = $conn->query($query);

?>


<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        // include('menu.php');
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <h3><b>INFORMATION AND COMMUNICATION TECHNOLOGY SOCIETY</b></h3>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle" src="img/ccsitlogo.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-warning font-weight-bold">FEES</h2><br>


                        <div class="dropdown">
                            <?php

                            // $query = "SELECT * FROM school_year";
                            // $result = mysqli_query($conn, $query);

                            // Store the retrieved data in an array
                            // $data = array();
                            // while ($row = mysqli_fetch_assoc($result)) {
                            //     $data[] = $row['SY'];
                            // }

                            ?>
                        </div>

                        <form method="POST" action="">
                            <label for="dropdown">School Year:</label>
                            <select name="dropdown" id="dropdown">
                                <?php
                                // Populate the dropdown options using the retrieved data
                                // foreach ($data as $option) {
                                //     echo "<option value=\"$option\">$option</option>";
                                // }
                                ?>
                            </select>
                        </form>

                    </div>
                    <!-- /.container-fluid -->

                    <div>

                        <table class="table table-hover table-bordered" id="dataTable">
                            <thead class="bg-gradient-warning text-white font-weight-bold text-center">
                                <tr>

                                    <td>Event ID</td>
                                    <td>Event Name</td>
                                    <td>Student ID</td>
                                    <td>IN</td>
                                    <td>OUT</td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // if (isset($_POST['student_id']) && !empty($_POST['student_id'])) {
                                //     // Assuming you have already established a database connection
                                //     $id = $_POST['student_id'];

                                //     // Fetch event names from the database
                                //     $query = "SELECT e_name, att_in, att_out FROM attendance WHERE student_id = '$id'";
                                //     $result = mysqli_query($conn, $query);

                                //     // Check if any results were returned
                                //     if (mysqli_num_rows($result) > 0) {
                                //         // Display the event names
                                //         while ($row = mysqli_fetch_assoc($result)) {
                                //             echo "<td>" . $row['e_name'] . "</td>";
                                //             echo "<td>" . $row['att_in'] . "</td>";
                                //             echo "<td>" . $row['att_out'] . "</td>";
                                //         }
                                //     } else {
                                //         echo "No events found for the specified student ID.";
                                //     }
                                // } else {
                                //     echo "Please enter a student ID.";
                                // }

                                // $result = mysqli_query($conn, $query);

                                // if ($result->num_rows > 0) {
                                //     echo "<table>
                                //             <tr>
                                //                 <th>Attendance ID</th>
                                //                 <th>Event ID</th>
                                //                 <th>Attendance In</th>
                                //                 <th>Attendance Out</th>
                                //                 <th>Event Name</th>
                                //                 <th>Student Id</th>
                                //             </tr>";

                                // while ($row = mysqli_fetch_assoc($result)) {
                                //     echo "<tr>
                                //             <td>".$row['id']."</td>
                                //             <td>".$row['id']."</td>
                                //             <td>".$row['att_in']."</td>
                                //             <td>".$row['att_out']."</td>
                                //             <td>".$row['e_name']."</td>
                                //             <td>".$row['student_id']."</td>
                                //         </tr>";
                                // }

                                // $counter = 1;
                                // // foreach ($resul as $row) 
                                // while ($row = mysqli_fetch_assoc($results)) {


                                //     echo
                                //     '<tr class = "text-center">
                                          
                                        
                                //             <td>' . $row['e_id'] . '</td>
                                //             <td>' . $row['e_name'] . '</td>
                                //             <td>' . $row['student_id'] . '</td>
                                //             <td>' . $row['att_in'] . '</td>
                                //             <td>' . $row['att_out'] . '</td>
                                            
                                           
                                            
                                //         </tr>';
                                //     $counter++;
                                // }

                                // echo "</table>";
                                // // } else {
                                // //     echo "No data found.";
                                // // }

                                // // Close the database connection
                                // mysqli_close($conn);
                                // ?>
                                <?php






                                // Fetch event names from the database




                                // $result = mysqli_query($conn, $query);


                                //  // Display the event names
                                //  $counter = 1;
                                //  while ($row = mysqli_fetch_assoc($result)) {
                                //     echo "<tr class=\"text-center\">";
                                //     echo "<td class=\"text-danger\">$counter</td>";
                                //     echo "<td>" . $row['e_name'] . "</td>";
                                //     echo "<td>" . $row['att_in'] . "</td>";
                                //     echo "<td>" . $row['att_out'] . "</td>";
                                //     echo "</tr>";
                                //     $counter++;
                                //}

                                // $counter = 1;
                                // while ($row = mysqli_fetch_assoc($result)) {
                                //     echo "<tr class=\"text-center\">";
                                //     echo "<td class=\"text-danger\">$counter</td>";
                                //     echo "<td>" . $row['e_name'] . "</td>";
                                //     echo "</tr>";
                                //     $counter++;
                                // }
                                ?>
                            </tbody>
                        </table>

                        <br><br>
                        <form action="total_fines.php" method="post">
                            &nbsp;
                            <b>Enter amount of Fines: </b><input type="text" name="fines"> <br> <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <b>No. of Absent: </b><input type="text" name="absent"> <a onclick="calculate()">OK</a>
                            <br> <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <b>Fines: </b><input type="text" name="to_be_paid" id="to_be_paid">
                            Paid <input type="checkbox" name="paid">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="submit" value="SAVE">
                        </form>


                        <script>
                            function calculate() {
                                var fines = parseFloat(document.getElementsByName('fines')[0].value);
                                var absent = parseFloat(document.getElementsByName('absent')[0].value);
                                var toBePaid = fines * absent;
                                document.getElementById('to_be_paid').value = toBePaid;
                            }
                        </script>


                    </div>
                </div>
                <!-- End of Main Content -->


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

</body>

</html>