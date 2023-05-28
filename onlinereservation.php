<?php
    session_start();
    include('connection.php');
    $haslog = (isset($_SESSION['hasLog'])?$_SESSION['hasLog']:0);

    if (empty($haslog)){
        header("location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<?php 
    include("header.php")
?>
<link rel="stylesheet" href="admin.css">

<html lang="en">

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
                                        <p class="text-gray">ONLINE RESERVATIONS |  
                                            <a href="admin.php">
                                                <i class="bi bi-house text-dark"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                            <table class="table table-sm" id="myTable" width="100%" cellspacing="0">
                                                <thead class="fixed-header">
                                                <tr class="">
                                                    <td class="font-weight-bold">No.</td>
                                                    <td class="font-weight-bold">Customer</td>
                                                    <td class="font-weight-bold">Order</td>
                                                    <td class="font-weight-bold">Date</td>
                                                    <td class="font-weight-bold">Time</td>
                                                    <td class="font-weight-bold">Heads</td>
                                                    <td class="font-weight-bold">Schedule</td>
                                                    <td class="font-weight-bold">Actions</td>
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    
                                                    $sql = "SELECT id,contactName,orderName,DATE_FORMAT(orderDate, '%M, %e') AS 'orderDate', address, TIME_FORMAT(orderTime, '%h:%i %p') AS orderTime, heads, DATE_FORMAT(SCHEDULE, '%M, %e') AS 'schedule',venue,contact, (heads*250) AS price,message
                                                    FROM online_reservations ORDER BY orderDate DESC";

                                                    // Execute query and store results in an array
                                                    $results = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
                                                    ?>
                                                    <?php if(!empty($results)) { ?>
                                                        <?php $counter = 1; foreach($results as $result): ?>
                                                            <tr class=" hoverni">
                                                            <td class="text-gray-700"><?= $counter?></td>
                                                            <td class="text-gray-900"><?= $result['contactName'] ?></td>
                                                            <td class="text-gray-700"><?= $result['orderName'] ?></td>
                                                            <td class="text-gray-700"><?= $result['orderDate'] ?></td>
                                                            <td class="text-gray-700"><?= $result['orderTime'] ?></td>
                                                            <td class="text-gray-700"><?= $result['heads'] ?></td>
                                                            <td class="text-gray-700"><?= $result['schedule'] ?></td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="dropbtn"><i class="bi bi-chevron-compact-down text-dark"></i></button>
                                                                    <div class="dropdown-content">
                                                                        <a class="text-success" href="#" data-bs-toggle="modal" data-bs-target="#viewmodal<?= $result['id'] ?>">View</i></a>
                                                                        <a class="text-primary" href = "onlinereservationedit.php?id=<?= $result['id'] ?>">edit</a>
                                                                        <a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $result['id'] ?>">decline</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- MODAL NI SA VIEW BUTTON -->
                                                            <div class="modal fade " id="viewmodal<?= $result['id'] ?>">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-dark text-white">
                                                                                <h5 class="modal-title"><?= $result['contactName'] ?></h5>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="container">
                                                                                    <h6>Order Details</h6>
                                                                                    <div class="row">
                                                                                    <div class="col-6">
                                                                                        <ul class="list-unstyled text-secondary small">
                                                                                            <li>Order Name:</li>
                                                                                            <li>Contact Number:</li>
                                                                                            <li>Heads:</li>
                                                                                            <li>Schedule:</li>
                                                                                            <li>Starts at:</li>
                                                                                            <li>Address:</li>
                                                                                            <li>Venue:</li>
                                                                                            <li>Total Price:</li>
                                                                                            <li>Message:</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <ul class="list-unstyled small">
                                                                                            <li><?= $result['orderName']?></li>
                                                                                            <li><?= $result['contact']?></li>
                                                                                            <li><?= $result['heads']?> People</li>
                                                                                            <li><?= $result['schedule']?></li>
                                                                                            <li><?= $result['orderTime']?></li>
                                                                                            <li><?= $result['address']?></li>
                                                                                            <li><?= $result['venue']?></li>
                                                                                            <li><span>&#8369;</span><?= $result['price']?></li>
                                                                                            <li><?= $result['message']?></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!-- END MODAL NI SA VIEW BUTTON -->

                                                            <!-- MODAL NI SA DECLINE BUTTON -->
                                                            <div class="modal fade" id="deleteModal<?= $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-danger text-white">
                                                                            <h5 class="modal-title" id="deleteModalTitle">Decline Reservation</h5>
                                                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="lead"><strong><?= $result['contactName'] ?></strong>'s reservation will be removed from the online reservation list if you decline it. Are you sure you want to proceed?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                            <a class="btn btn-danger" href="onlinereservationdelete.php?id=<?= $result['id'] ?>">Decline Reservation</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- END MODAL NI SA DELETE BUTTON -->
                                                        </tr>
                                                        <?php $counter++; endforeach; ?>
                                                    <?php } else { ?>
                                                        <tr>
                                                            <td colspan="8">No results found.</td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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

    </body>

</html>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function() {
  $('#myTable').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false
  });
});
</script>
