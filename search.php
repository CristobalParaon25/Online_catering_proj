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
<style>
    .table-responsive {
    max-height: 300px;
    overflow-y: auto;
  }
</style>
<html lang="en">

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
                                        <p>RESULT</p>
                                        <a href="reservation.php"><button style="flex-wrap: wrap; float:right; margin-right:3%; margin-top:-5%" type="button" class="btn" >
                                            <i class="bi bi-arrow-left"></i> Return
                                        </button></a>
                                        
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table table-sm" id="example" width="100%" cellspacing="0" data-bs-toggle="table" data-bs-search="true" data-bs-show-search-clear-button="true">
                                                        <?php
                                                            if ($conn->connect_error) {
                                                                die("Connection failed: " . $conn->connect_error);
                                                              }
                                                              
                                                              // Retrieve search term from POST request
                                                              $searchTerm = $_POST['search'];
                                                              
                                                              // Prepare and execute SQL query
                                                              $sql = "SELECT id, contactName, orderName, orderDate, address, orderTime, heads, DATE_FORMAT(SCHEDULE, '%m - %D - %Y') AS 'schedule', venue, (heads*250) AS price, contact 
                                                                      FROM reservations 
                                                                      WHERE contactName LIKE '%$searchTerm%'";
                                                              $result = $conn->query($sql);
                                                              
                                                              // Display search results in table
                                                              if ($result->num_rows > 0) {
                                                                echo "<table class='table'>
                                                                        <thead>
                                                                          <tr>
                                                                            <th>NO</th>
                                                                            <th>CONTACT NAME</th>
                                                                            <th>ORDER NAME</th>
                                                                            <th>ORDER DATE</th>
                                                                            <th>ORDER TIME</th>
                                                                            <th>HEADS</th>
                                                                            <th>SCHEDULE</th>
                                                                            <th>CONTACT</th>
                                                                          </tr>
                                                                        </thead>
                                                                        <tbody>";
                                                                // Output data of each row
                                                                while($row = $result->fetch_assoc()) {
                                                                  echo "<tr>
                                                                          <td>".$row["id"]."</td>
                                                                          <td>".$row["contactName"]."</td>
                                                                          <td>".$row["orderName"]."</td>
                                                                          <td>".$row["orderDate"]."</td>
                                                                          <td>".$row["orderTime"]."</td>
                                                                          <td>".$row["heads"]."</td>
                                                                          <td>".$row["schedule"]."</td>
                                                                          <td>".$row["contact"]."</td>
                                                                        </tr>";
                                                                }
                                                                echo "</tbody></table>";
                                                              } else {
                                                                echo "<p>No results found.</p>";
                                                              }
                                                              
                                                        ?>
                                                       
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

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<!-- <script src="js/demo/datatables-demo.js"></script>
<script src="assetsDT/js/bootstrap.bundle.min.js"></script>
<script src="assetsDT/js/jquery-3.6.0.min.js"></script>
<script src="assetsDT/js/pdfmake.min.js"></script>
<script src="assetsDT/js/vfs_fonts.js"></script>
<script src="assetsDT/js/custom.js"></script>
<script src="assetsDT/js/datatables.min.js"></script> -->