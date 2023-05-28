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
                                        <p class="text-gray">BIN |  
                                            <a href="admin.php">
                                                <i class="bi bi-house text-dark"></i>
                                            </a>
                                        </p>
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
                                                            <td class="font-weight-bold">Contact</td>
                                                            <td class="font-weight-bold">Type</td>
                                                            <td class="font-weight-bold">Actions</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT id,contactName,orderName,orderDate, address, orderTime, heads,  DATE_FORMAT(SCHEDULE, '%m - %D - %Y') AS 'schedule',venue, (heads*250) AS price,contact,type
                                                        FROM bin ";

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
                                                                <td class="text-gray-700"><?= $result['contact'] ?></td>
                                                                <td class="text-gray-700"><?= $result['type'] ?></td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button class="dropbtn"><i class="bi bi-chevron-compact-down text-dark"></i></button>
                                                                        <div class="dropdown-content">
                                                                            <a style="color:green" href="#" data-bs-toggle="modal" data-bs-target="#restoreModal<?= $result['id'] ?>">Restore</a>
                                                                            <a style="color:red" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $result['id'] ?>">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <!-- MODAL NI SA RESTORE BUTTON -->
                                                                <div class="modal fade" id="restoreModal<?= $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-success text-white">
                                                                                <h5 class="modal-title">Restore Reservation</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p class="text"><strong><?= $result['contactName'] ?></strong>'s reservation will be restored. Are you sure you want to proceed?</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                                <a class="btn btn-primary" href="restore.php?id=<?= $result['id'] ?>">Restore</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <!-- END MODAL NI SA RESTORE BUTTON -->

                                                                <!-- MODAL NI SA DELETE BUTTON -->
                                                                <div class="modal fade" id="deleteModal<?= $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-danger">
                                                                                <h5 class="modal-title text-white" id="exampleModalLongTitle">Delete Reservation</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p class="text">Are you sure you want to delete <strong><?= $result['contactName'] ?></strong>'s reservation permanently?</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                                <a class="btn btn-danger" href="bindelete.php?id=<?= $result['id'] ?>">Delete</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    </body>

</html>