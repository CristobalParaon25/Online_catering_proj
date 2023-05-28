<?php
    session_start();
    include('connection.php');
    $haslog = (isset($_SESSION['hasLog'])?$_SESSION['hasLog']:0);

    if (empty($haslog)){
        header("location: index.php");
        exit;
    }
    // if (isset($_GET['deleted'])) {
    //     echo "<script>alert('Reservation deleted successfully.');</script>";
    //  }
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
                                        <p class="text-gray">ON-CALL RESERVATIONS |  
                                            <a href="admin.php">
                                                <i class="bi bi-house text-dark"></i>
                                            </a>
                                        </p>
                                        
                                        <button style="background-color:lightgreen;color:green;flex-wrap: wrap; float:right; margin-right:6%; margin-top:-3%" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#reservationModal">
                                            <i class="bi bi-plus"></i> Add
                                        </button>
                                        
                                        <!--  *******************************************Add reservation Modal*********************************** -->
                                        <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header bg-dark">
                                                    <h6 class="modal-title text-white" id="exampleModalLongTitle">Add Reservations</h6>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- modal form here -->
                                                    <form class= "center" action = "reservationaddsave.php" method="post">
                                                            <input type="hidden" name="hiddenID" value="<?=$id?>">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Customer Name:</label>
                                                                    <input type="text" name="contactName" class="form-control"
                                                                    style="border-right: 1px solid white;border-left: 1px solid white;border-bottom: 1px solid black;border-top: 1px solid white;background-color:white">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Order Name:</label>
                                                                <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <label class="input-group-text" for="inputGroupSelect01">Select</label>
                                                                </div>
                                                                <select class="custom-select" name="orderName" style="width:70%;border-right: 1px solid white;border-left: 1px solid white;border-bottom: 1px solid black;border-top: 1px solid white;background-color:white">
                                                                    <option selected></option>
                                                                    <option value="Wedding Package">Birthday Package</option>
                                                                    <option value="Wedding Package">Wedding Package</option>
                                                                    <option value="Fiesta Package">Fiesta Package</option>
                                                                    <option value="Christining Package">Christening Package</option>
                                                                    <option value="Debut Package">Debut Package</option>
                                                                    <option value="Party Package">Party Package</option>
                                                                    <option value="Death Anniversary">Death Anniversary</option>
                                                                    <option value="Death Anniversary">Wedding Anniversary</option>

                                                                    
                                                                </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Address:</label>
                                                                    <input type="text" name="address" class="form-control"
                                                                    style="border-right: 1px solid white;border-left: 1px solid white;border-bottom: 1px solid black;border-top: 1px solid white;background-color:white">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Time:</label>
                                                                    <!-- <input type="time" name="orderTime" class="form-control"> -->
                                                                    <input type="time" name="orderTime" class="form-control" required
                                                                    style="border-right: 1px solid white;border-left: 1px solid white;border-bottom: 1px solid black;border-top: 1px solid white;background-color:white">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Heads:</label>
                                                                    <input type="number" name="heads" class="form-control"
                                                                    style="border-right: 1px solid white;border-left: 1px solid white;border-bottom: 1px solid black;border-top: 1px solid white;background-color:white">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Schedule:</label>
                                                                    <input type="date" name="schedule" class="form-control"
                                                                    style="border-right: 1px solid white;border-left: 1px solid white;border-bottom: 1px solid black;border-top: 1px solid white;background-color:white">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Venue:</label>
                                                                    <input type="text" name="venue" class="form-control"
                                                                    style="border-right: 1px solid white;border-left: 1px solid white;border-bottom: 1px solid black;border-top: 1px solid white;background-color:white">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Contact:</label>
                                                                    <input type="text" name="contact" class="form-control"
                                                                    style="border-right: 1px solid white;border-left: 1px solid white;border-bottom: 1px solid black;border-top: 1px solid white;background-color:white">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12  m-2">
                                                                <button type="submit"  class="btn btn-primary">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- end of modal form -->
                                                </div>                              
                                                </div>
                                            </div>
                                        </div>                      
                                        <!--  End of reservation Modal -->
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table table-sm" id="myTable" width="100%" cellspacing="0" data-bs-toggle="table" data-bs-search="true" data-bs-show-search-clear-button="true">
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
                                                        $sql = "SELECT id,contactName,orderName,DATE_FORMAT(orderDate, '%M, %e') AS 'orderDate', address, TIME_FORMAT(orderTime, '%h:%i %p') AS orderTime, heads,  DATE_FORMAT(SCHEDULE, '%M, %e') AS 'schedule',venue, (heads*250) AS price,contact
                                                        FROM reservations ORDER BY schedule ASC";

                                                        // Execute query and store results in an array
                                                        $results = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
                                                        ?>
                                                        <?php if(!empty($results)) { ?>
                                                            <?php $counter = 1; foreach($results as $result): ?>
                                                                <tr class=" hoverni">
                                                                <td class="text-gray-500"><?= $counter?></td>
                                                                <td class="font-weight-bold text-gray-500"><?= $result['contactName'] ?></td>
                                                                <td class="text-gray-500"><?= $result['orderName'] ?></td>
                                                                <td class="text-gray-500"><?= $result['orderDate'] ?></td>
                                                                <td class="text-gray-700"><?= $result['orderTime'] ?></td>
                                                                <td class="text-gray-700"><?= $result['heads'] ?></td>
                                                                <td class="text-gray-700"><?= $result['schedule'] ?></td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button class="dropbtn"><i class="bi bi-chevron-compact-down text-dark"></i></button>
                                                                        <div class="dropdown-content">
                                                                            <a style="color:blue" href="#" data-bs-toggle="modal" data-bs-target="#viewmodal<?= $result['id'] ?>">View</i></a>
                                                                            <a style="color:green" href = "reservationedit.php?id=<?= $result['id'] ?>">Edit</a>
                                                                            <a style="color:red" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $result['id'] ?>">Delete</a>
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
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <ul class="list-unstyled small">
                                                                                                <li><?= $result['orderName']?></li>
                                                                                                <li><?= $result['contact']?></li>
                                                                                                <li><?= $result['heads']?> People</li>
                                                                                                <li><?= $result['orderDate']?></li>
                                                                                                <li><?= $result['orderTime']?></li>
                                                                                                <li><?= $result['address']?></li>
                                                                                                <li><?= $result['venue']?></li>
                                                                                                <li><span>&#8369;</span><?= $result['price']?></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- END MODAL NI SA VIEW BUTTON -->

                                                                <!-- MODAL NI SA DELETE BUTTON -->
                                                                <div class="modal fade" id="deleteModal<?= $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal<?= $result['id'] ?>Label" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header bg-danger text-white">
                                                                            <h5 class="modal-title" id="deleteModal<?= $result['id'] ?>Label">Delete Reservation</h5>
                                                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="mb-0">Are you sure you want to delete the reservation of <strong><?= $result['contactName'] ?></strong>?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                            <a class="btn btn-danger" href="reservationdelete.php?id=<?= $result['id'] ?>">Delete</a>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- END MODAL NI SA DELETE BUTTON -->
                                                            </tr>
                                                            <?php $counter++; endforeach; ?>
                                                        <?php } else { ?>
                                                            <tr>
                                                                <td colspan="2">No results found.</td>
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
    </body>
    <!-- Sweet Alert scripts -->
<script src="js/sweetalert2.all.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
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
    "bAutoWidth": false,
    "orderClasses": false,
  });
});

</script>
</html>
