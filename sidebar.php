<?php
   $loggedInUserRole = $_SESSION['Role'];
?>
<div style="background-color: #343a40;" class="col-auto px-0 sidebar-color">
    <div id="sidebar" class="collapse collapse-horizontal show border-end vh-100">
        <div id="sidebar-nav" class="list-group border-0 rounded-0">
            <div style="margin-left:40px" class="p-3">
                <img class="rounded-circle bg-white" src="images/logo1.png" alt="" style="width:70px">
            </div>
            <ul style="background-color: #343a40;border-radius:0%" class="list-group d-flex p-2 sidebar-color">
                <li style="background-color: <?php echo basename($_SERVER['PHP_SELF']) == 'admin.php' ? 'aliceblue' : '#343a40'; ?>" class="list-group-item sidebar-color border-0 li-hover">
                    <span>
                        <svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </span>
                    <a href="admin.php" style="color: <?php echo basename($_SERVER['PHP_SELF']) == 'admin.php' ? '#343a40' : 'aliceblue'; ?>" class="text-decoration-none <?php if (basename($_SERVER['PHP_SELF']) == 'admin.php') echo 'fw-bold'; ?>">Dashboard</a>
                </li>
                <li style="background-color: <?php echo basename($_SERVER['PHP_SELF']) == 'reservation.php' ? 'aliceblue' : '#343a40'; ?>" class="list-group-item sidebar-color border-0 li-hover">
                    <span>
                        <svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                        </svg>
                    </span>
                    <a href="reservation.php" style="color: <?php echo basename($_SERVER['PHP_SELF']) == 'reservation.php' ? '#343a40' : 'aliceblue'; ?>" class="text-decoration-none <?php if (basename($_SERVER['PHP_SELF']) == 'reservation.php') echo 'fw-bold'; ?>">On-call Reservation</a>
                </li>
                <li style="background-color: <?php echo basename($_SERVER['PHP_SELF']) == 'onlinereservation.php' ? 'aliceblue' : '#343a40'; ?>" class="list-group-item sidebar-color border-0 li-hover">
                    <span>
                        <svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </span>
                    <a href="onlinereservation.php" style="color: <?php echo basename($_SERVER['PHP_SELF']) == 'onlinereservation.php' ? '#343a40' : 'aliceblue'; ?>" class="text-decoration-none <?php if (basename($_SERVER['PHP_SELF']) == 'onlinereservation.php') echo 'fw-bold'; ?>">Online Reservation</a>
                </li>
                <li style="background-color: <?php echo basename($_SERVER['PHP_SELF']) == 'customers.php' ? 'aliceblue' : '#343a40'; ?>" class="list-group-item sidebar-color border-0 li-hover" aria-current="true">
                    <span>
                        <svg style="width: 25px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </span> 
                    <a href="customers.php" style="color: <?php echo basename($_SERVER['PHP_SELF']) == 'customers.php' ? '#343a40' : 'aliceblue'; ?>" class="text-decoration-none <?php if (basename($_SERVER['PHP_SELF']) == 'customers.php') echo 'fw-bold'; ?>">Customers</a>
                </li>
                <li style="background-color: <?php echo basename($_SERVER['PHP_SELF']) == 'income.php' ? 'aliceblue' : '#343a40'; ?>" class="list-group-item sidebar-color border-0 li-hover">
                     <span>
                        <svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                    </span> 
                    <a href="income.php" style="color: <?php echo basename($_SERVER['PHP_SELF']) == 'income.php' ? '#343a40' : 'aliceblue'; ?>" class="text-decoration-none <?php if (basename($_SERVER['PHP_SELF']) == 'income.php') echo 'fw-bold'; ?>">Statistics</a>
                </li>
                <li style="background-color: <?php echo basename($_SERVER['PHP_SELF']) == 'inbox.php' ? 'aliceblue' : '#343a40'; ?>" class="list-group-item sidebar-color border-0 li-hover">
                    <span>
                        <svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span> 
                    <a href="inbox.php" style="color: <?php echo basename($_SERVER['PHP_SELF']) == 'inbox.php' ? '#343a40' : 'aliceblue'; ?>" class="text-decoration-none <?php if (basename($_SERVER['PHP_SELF']) == 'inbox.php') echo 'fw-bold'; ?>">Feedbacks</a>
                </li>
                <?php if ($loggedInUserRole === 'Admin'): ?>
                <li style="background-color: <?php echo basename($_SERVER['PHP_SELF']) == 'bin.php' ? 'aliceblue' : '#343a40'; ?>" class="list-group-item sidebar-color border-0 li-hover">
                <span>
                    <svg style="width: 25px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    </span> 
                    <a href="bin.php" style="color: <?php echo basename($_SERVER['PHP_SELF']) == 'bin.php' ? '#343a40' : 'aliceblue'; ?>" class="text-decoration-none <?php if (basename($_SERVER['PHP_SELF']) == 'bin.php') echo 'fw-bold'; ?>">Bin</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

