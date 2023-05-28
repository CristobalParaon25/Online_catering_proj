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
<style>
    .icon:hover{
        transform: scale(1.5);
        transition: 0.5s;
    }
    body{
        background-color: #f2f4f4;
    }
</style>
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
                    <div class="row">
                        <div class="col-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-start">
                                    <h2 class="card-text"><i class=" mr-3"></i>
                                                            <?php
                                                                echo $conn->query("SELECT *, (id) FROM reservations")->num_rows;
                                                            ?> 
                                                            <span class="float-end icon"><i class="bi bi-telephone"></i></span></h2>
                                                            <span><h6 class="card-title">On-call Reservations</h6></span>
                                    <a href="reservation.php"><button type="submit" class="btn buttons" 
                                    style="border:1px solid black;font-size:55%">View Details </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-start">
                                    <h2 class="card-text"><i class=" mr-3"></i>
                                                            <?php
                                                                echo $conn->query("SELECT *, (id) FROM online_reservations")->num_rows;
                                                            ?>
                                                            <span class="float-end icon"><i class="bi bi-chat"></i></span></h2>
                                                            <span><h6 class="card-title">Online Reservations</h6></span>
                                    <a href="onlinereservation.php"><button type="submit" class="btn buttons" 
                                    style="border:1px solid black;font-size:55%">View Details </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-start">
                                    <h2 class="card-text"><i class=" mr-3"></i>
                                                            <?php
                                                                $result = $conn->query("SELECT contactName FROM online_reservations
                                                                UNION
                                                                SELECT contactName FROM reservations");
                                                                $count = $result->num_rows;
                                                                
                                                                // display the count of all customers
                                                                echo $count;
                                                            ?>
                                                            <span class="float-end icon"><i class="bi bi-person"></i></span></h2>
                                    <h6 class="card-title">Total Customers</h6>
                                    <a href="customers.php"><button type="submit" class="btn buttons" 
                                    style="border:1px solid black;font-size:55%">View Details  </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-start">
                                    <h2 class="card-text"><i class=" mr-3"></i>&#8369
                                                            <?php
                                                                $result = $conn->query("SELECT SUM(heads*250) as total_income FROM reservations
                                                                UNION
                                                                SELECT SUM(heads*250) as total_income FROM online_reservations");
                                                                $total_income = 0;
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $total_income += $row["total_income"];
                                                                }
                                                                
                                                                // format the total income with commas as thousand separators
                                                                $formatted_income = number_format($total_income);
                                                                
                                                                // display the formatted total income
                                                                echo $formatted_income;
                                                            ?><span class="float-end icon"><i class="bi bi-credit-card-2-front"></i></span></h2>
                                    <h6 class="card-title">Approximate Income</h6>
                                    <a href="income.php"><button type="submit" class="btn buttons" 
                                    style="border:1px solid black;font-size:55%">View Details  </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-start">
                                    <h2 class="card-text"><i class=" mr-3"></i>
                                                            <?php
                                                                $result = $conn->query("SELECT name FROM messages");
                                                                $count = $result->num_rows;
                                                                
                                                                // display the count of all customers
                                                                echo $count;
                                                            ?><span class="float-end icon"><i class="bi bi-credit-card-2-front"></i></span></h2>
                                    <h6 class="card-title">Messages</h6>
                                    <a href="inbox.php"><button type="submit" class="btn buttons" 
                                    style="border:1px solid black;font-size:55%">View Details  </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-6  my-3">
                            <div class="card shadow-sm border-0" style="margin-top:2%">
                                <p class="mb-0"></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <ul class="list-group list-group-flush">
                                                        <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                            <div class="list-left d-flex">
                                                                <div class="list-icon mr-1">
                                                                    <div class="avatar bg-rgba-primary m-0">
                                                                        <div class="avatar-content">
                                                                            <i class="bx bx-calendar-alt text-primary font-size-base"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-content">
                                                                <span><svg style="width:20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                                                                </svg></span>
                                                                    <span class="list-title" style="color:limegreen"><b>Event Schedule For Online</b></span>
                                                                    <small class="text-muted d-block" style="margin-top: 5%;">
                                                                    <table class="table-sm" width="100%" cellspacing="0">
                                                                        <tbody>
                                                                            <?php
                                                                            $sql = "SELECT id, contactName, DATE_FORMAT(SCHEDULE, '%M %d %Y') AS 'sched'
                                                                            FROM online_reservations 
                                                                            ORDER BY sched DESC";
                                                                        
                                                                            // Execute query and store results in an array
                                                                            $results = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
                                                                            ?>
                                                                            <?php if(!empty($results)) { ?>
                                                                                <?php $counter = 1; foreach($results as $result): ?>
                                                                                    <tr style="font-size: small;">
                                                                                        <td class="text-gray-700"><?= $counter?>.</td>
                                                                                        <td class="text-gray-900"><?= $result['contactName'] ?></td>
                                                                                        <td class="text-gray-700"><?= $result['sched'] ?></td>
                                                                                    </tr>
                                                                                <?php $counter++; endforeach; ?>
                                                                            <?php } else { ?>
                                                                                <tr>
                                                                                    <td colspan="2">No results found.</td>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                    </small>
                                                                    
                                                                </div>
                                                            </div>
                                                            <span></span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div> -->
                        <!-- next card ni ha -->
                        <!-- <div class="col-6 my-3">
                            <div class="card shadow-sm border-0" style="margin-top:2%">
                                <p class="mb-0"></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <ul class="list-group list-group-flush">
                                                        <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                            <div class="list-left d-flex">
                                                                <div class="list-icon mr-1">
                                                                    <div class="avatar bg-rgba-primary m-0">
                                                                        <div class="avatar-content">
                                                                            <i class="bx bx-calendar-alt text-primary font-size-base"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-content">
                                                                <span><svg style="width:20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                                                    </svg>
                                                                    </span>
                                                                    <span class="list-title" style="color:limegreen"><b>Event Schedule For On-call</b>
                                                                    </span>
                                                                    <small class="text-muted d-block" style="margin-top: 5%;">
                                                                    <table class="table-sm" width="100%" cellspacing="0">
                                                                    <tbody>
                                                                            <?php
                                                                            $sql = "SELECT id, contactName, DATE_FORMAT(SCHEDULE, '%m - %D - %Y') AS 'sched'
                                                                            FROM reservations 
                                                                            ORDER BY sched DESC";
                                                                            
                                                                        
                                                                            // Execute query and store results in an array
                                                                            $results = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
                                                                            ?>
                                                                            <?php if(!empty($results)) { ?>
                                                                                <?php $counter = 1; foreach($results as $result): ?>
                                                                                    <tr style="font-size: small;">
                                                                                        <td class="text-gray-700"><?= $counter?>.</td>
                                                                                        <td class="text-gray-900"><?= $result['contactName'] ?></td>
                                                                                        <td class="text-gray-700"><?= $result['sched'] ?></td>
                                                                                    </tr>
                                                                                <?php $counter++; endforeach; ?>
                                                                            <?php } else { ?>
                                                                                <tr>
                                                                                    <td colspan="2">No results found.</td>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                    </small>
                                                                    
                                                                </div>
                                                            </div>
                                                            <span></span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        
    </body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
