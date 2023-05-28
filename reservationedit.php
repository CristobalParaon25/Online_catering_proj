<?php
    session_start();
    include('connection.php');
    $haslog = (isset($_SESSION['hasLog'])?$_SESSION['hasLog']:0);

    if (empty($haslog)){
        header("location: index.php");
        exit;
    }

    $sql = "SELECT id,contactName,orderName,orderDate, address, orderTime, heads, schedule,venue, (heads*250) AS price,contact
             FROM reservations ORDER BY orderDate DESC";
    $results = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snpmpc</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap 5 Icon CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    </head>

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
                                        <p>ON-CALL RESERVATIONS</p>
                                        
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                        <div class="container-fluid col-lg-11 col-sm-8 col-md-10 bg-gray-300 rounded">

                                        <?php
                                            $id = $_GET['id'];
                                            $sql = "select * from reservations where id = ".$id;
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                        ?>
                                        <form action = "reservationeditsave.php" method="post">
                                            <input type="hidden" name="hiddenID" value="<?=$id?>">
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Contact Name</label>
                                                    <input type="text" name="contactName" class="form-control" value="<?=$row['contactName']?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- <div class="form-group">
                                                    <label>Order Name</label>
                                                    <input type="text" name="orderName" class="form-control">
                                                </div> -->
                                                <label>Order Name</label>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Select</label>
                                                </div>
                                                <select class="custom-select" name="orderName">
                                                    <option selected>Birthday Package</option>
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" class="form-control" value="<?=$row['address']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Order Date</label>
                                                    <input type="date" name="orderDate" class="form-control" value="<?=$row['orderDate']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Time</label>
                                                    <input type="time" name="orderTime" class="form-control" value="<?=$row['orderTime']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Heads</label>
                                                    <input type="number" name="heads" class="form-control" value="<?=$row['heads']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Schedule</label>
                                                    <input type="date" name="schedule" class="form-control" value="<?=$row['schedule']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Venue</label>
                                                    <input type="text" name="venue" class="form-control" value="<?=$row['venue']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input type="text" name="contact" class="form-control" value="<?=$row['contact']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Message</label>
                                                    <input type="text" name="message" class="form-control" value="<?=$row['message']?>">
                                                </div>
                                            </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 mt-2">
                                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                                </div>
                                            </div>
                                        </form>



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

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<!-- <script src="js/demo/datatables-demo.js"></script>
<script src="assetsDT/js/bootstrap.bundle.min.js"></script>
<script src="assetsDT/js/jquery-3.6.0.min.js"></script>
<script src="assetsDT/js/pdfmake.min.js"></script>
<script src="assetsDT/js/vfs_fonts.js"></script>
<script src="assetsDT/js/custom.js"></script>
<script src="assetsDT/js/datatables.min.js"></script> -->