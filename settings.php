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

    <?php 
        include("header.php")
    ?>

    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <?php include("sidebar.php") ?>
                <div class="col ps-md-2 pt-2">
                    <?php 
                        include("navbar.php")
                    ?> 
                        <section>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card border-0 shadow">
                                        <div class="card-header bg-dark text-white">
                                            <h5 class="mb-0">Add User</h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="row g-3" action="settingsaddsave.php" method="post">
                                                <input type="hidden" name="hiddenID" value="<?=$id?>">
                                                <div class="col-md-12">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" name="UserName" class="form-control" id="username" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="Password" class="form-control" id="password" required>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Save
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to save changes?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-0 shadow">
                                        <div class="card-header bg-dark text-white">
                                            <h5 class="mb-0">Users</h5>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <?php
                                                $sql = "SELECT id, UserName FROM users ORDER BY id DESC";
                                                                    // Execute query and store results in an array
                                            $results = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
                                            ?>
                                            <?php if(!empty($results)) { ?>
                                                <?php $counter = 1; foreach($results as $result): ?>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <?= $result['UserName'] ?>
                                                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#removeUserModal">Remove</a>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="removeUserModal" tabindex="-1" aria-labelledby="removeUserModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="removeUserModalLabel">Confirm Removal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to remove this user?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <a href="removeuser.php?id=<?= $result['id'] ?>" class="btn btn-danger">Remove</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>

                                                    </li>
                                                <?php $counter++; endforeach; ?>
                                            <?php } else { ?>
                                                <li class="list-group-item">No users found.</li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        

    </body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<!-- <script src="js/demo/datatables-demo.js"></script>
<script src="assetsDT/js/bootstrap.bundle.min.js"></script>
<script src="assetsDT/js/jquery-3.6.0.min.js"></script>
<script src="assetsDT/js/pdfmake.min.js"></script>
<script src="assetsDT/js/vfs_fonts.js"></script>
<script src="assetsDT/js/custom.js"></script>
<script src="assetsDT/js/datatables.min.js"></script> -->

