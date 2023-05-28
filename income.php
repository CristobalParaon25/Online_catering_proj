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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                                        <p class="text-gray">INCOME |  
                                            <a href="admin.php">
                                                <i class="bi bi-house text-dark"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard row">
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Month</th>
                                                                <th>Income</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $sql = "SELECT MONTH(schedule) AS month, SUM(heads*250) AS total_income FROM reservations GROUP BY month
                                                                    UNION
                                                                    SELECT MONTH(schedule) AS month, SUM(heads*250) AS total_income FROM online_reservations GROUP BY month ORDER BY month DESC";
                                                            $result = $conn->query($sql);

                                                            // Output results
                                                            $current_month = "";
                                                            if ($result->num_rows > 0) {
                                                                while($row = $result->fetch_assoc()) {
                                                                    $month_name = date("F", mktime(0, 0, 0, $row["month"], 1));
                                                                    if ($current_month != $month_name) {
                                                                        echo "<tr><th colspan='2' style='background-color:#d4ebf2; color:blue'>$month_name</th></tr>";
                                                                        $current_month = $month_name;
                                                                    }
                                                                    echo "<tr><td></td><td>₱" . $row["total_income"] . "</td></tr>";
                                                                }
                                                            } else {
                                                                echo "<tr><td colspan='2'>No results found</td></tr>";
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <canvas id="myChart"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
                                    <script>
                                        var ctx = document.getElementById("myChart");
                                        var myChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                            labels: [],
                                            datasets: [{
                                                data: [],
                                                lineTension: 0,
                                                backgroundColor: 'transparent',
                                                borderColor: '#007bff',
                                                borderWidth: 4,
                                                pointBackgroundColor: '#007bff'
                                            }]
                                            },
                                            options: {
                                            scales: {
                                                yAxes: [{
                                                ticks: {
                                                    beginAtZero: false
                                                }
                                                }]
                                            },
                                            legend: {
                                                display: false,
                                            }
                                            }
                                        });

                                        // Make AJAX call to retrieve income data
                                        $.ajax({
                                            url: "get_income_data.php",
                                            dataType: "json",
                                            success: function(data) {
                                            // Update chart with retrieved income data
                                            var labels = [];
                                            var incomes = [];

                                            $.each(data, function(index, value) {
                                                labels.push(value.month);
                                                incomes.push(value.income);
                                            });

                                            myChart.data.labels = labels;
                                            myChart.data.datasets[0].data = incomes;
                                            myChart.update();
                                            }
                                        });
                                    </script>

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