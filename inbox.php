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
                                        <p class="text-gray">MESSAGES |  
                                            <a href="admin.php">
                                                <i class="bi bi-house text-dark"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
                                                    <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    
                                                    // Select all messages from the messages table
                                                    $sql_select_messages = "SELECT * FROM messages";
                                                    $result = mysqli_query($conn, $sql_select_messages);

                                                    // Display each message in a table row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['name'] . "</td>";
                                                        echo "<td>" . $row['email'] . "</td>";
                                                        echo "<td>" . $row['message'] . "</td>";
                                                        echo "<td>" . $row['date'] . "</td>";
                                                        echo "</tr>";
                                                    }

                                                  
                                                    ?>
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