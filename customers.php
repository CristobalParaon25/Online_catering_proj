<?php
    session_start();
    include('connection.php');
    $haslog = (isset($_SESSION['hasLog'])?$_SESSION['hasLog']:0);
    $loggedInUserRole = $_SESSION['Role'];

    if (empty($haslog)){
        header("location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="admin.css">
<?php 
    include("header.php")
?>

    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <?php 
                    include("sidebar.php")
                ?>
                <div class="col ps-md-2 pt-2">
                    <?php 
                        include("navbar.php")
                    ?> 
                    <section>
                        <div class="row">
                            <div class="col-12">
                                <div class="card border-0 shadow tables-color">
                                    <div class="card-header border-0 tables-color">
                                        <p class="text-gray">CUSTOMERS |  
                                            <a href="admin.php">
                                                <i class="bi bi-house text-dark"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                            <table class="table table-sm" id="myTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr class="">
                                                    <td class="font-weight-bold">NO.</td>
                                                    <td class="font-weight-bold">CUSTOMER NAME</td>
                                                    <td class="font-weight-bold">ADDRESS</td>
                                                    <td class="font-weight-bold">CONTACT</td>
                                                    <td class="font-weight-bold">ORDERED AT</td>
                                                    <td class="font-weight-bold">SCHEDULE</td>
                                                    <td class="font-weight-bold text-center">STATUS</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT id, contactName, DATE_FORMAT(orderDate, '%M, %e') AS 'orderDate', address, contact, status, schedule
                                                FROM reservations
                                                UNION
                                                SELECT id, contactName, DATE_FORMAT(orderDate, '%M, %e') AS 'orderDate', address, contact, status, schedule
                                                FROM online_reservations
                                                ORDER BY SCHEDULE ASC
                                                ";

                                                // Execute query and store results in an array
                                                $results = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

                                                if (!empty($results)) {
                                                    $counter = 1;
                                                    foreach ($results as $result) {
                                                        $status = $result['status'] === 'catered' ? 'Catered' : 'Not Catered';
                                                        $statusClass = $result['status'] === 'catered' ? 'catered' : 'not-catered';
                                                        $cellStyle = $result['status'] === 'catered' ? 'background-color: lightgreen; color: green;' : 'background-color: pink; color: red;';
                                                    
                                                        echo "<tr class='hoverni'>";
                                                        echo "<td class='text-gray-700'>$counter</td>";
                                                        echo "<td class='text-gray-900'>" . $result['contactName'] . "</td>";
                                                        echo "<td class='text-gray-700'>" . $result['address'] . "</td>";
                                                        echo "<td class='text-gray-700'>" . $result['contact'] . "</td>";
                                                        echo "<td class='text-gray-700'>" . $result['orderDate'] . "</td>";
                                                        echo "<td class='text-gray-700'>" . $result['schedule'] . "</td>";
                                                        echo "<td style='border-radius: 1rem; text-align: center; $cellStyle;cursor: pointer' class='text-gray-700 status-cell' onclick='updateStatus(" . $result['id'] . ", this)'>" . $status . "</td>";
                                                        echo "</tr>";
                                                    
                                                        $counter++;
                                                    }
                                                    
                                                    
                                                } else {
                                                    echo "<tr><td colspan='6'>No results found.</td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        <?php if ($loggedInUserRole === 'Admin'): ?>
                                        <script>
                                            function updateStatus(reservationId, cell) {
                                                // Display confirmation dialog using SweetAlert
                                                Swal.fire({
                                                title: 'Please confirm!',
                                                text: 'Are you sure you want to update the status?',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Update'
                                                }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Make an AJAX request to update the status
                                                    var xhr = new XMLHttpRequest();
                                                    xhr.open('POST', 'update_status.php', true);
                                                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                                    xhr.onreadystatechange = function() {
                                                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                                        // Update the status cell
                                                        cell.textContent = 'Catered';
                                                        cell.style.backgroundColor = 'lightgreen';
                                                        cell.style.color = 'green';

                                                        // Display success message using SweetAlert
                                                        Swal.fire({
                                                        title: 'Status Updated',
                                                        text: 'The status has been updated successfully.',
                                                        icon: 'success'
                                                        });
                                                    }
                                                    };
                                                    xhr.send('reservationId=' + reservationId);
                                                }
                                                });
                                            }
                                            </script>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function() {
  $('#myTable').DataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    "orderClasses": false,
  });
});

</script>
    </body>

</html>