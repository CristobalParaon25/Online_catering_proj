<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snpmpc</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap 5 Icon CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'){ ?>
        window.onload = function(){
            swal({
                title: "Save Successfully!",
                text: "",
                icon: "success",
                button: "OK"
            });
        }
    <?php } ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'danger'){ ?>
        window.onload = function(){
            swal({
                title: "Deleted Successfully!",
                text: "",
                icon: "error",
                button: "OK"
            });
        }
    <?php } ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'declined'){ ?>
        window.onload = function(){
            swal({
                title: "Declined Reservation!",
                text: "The reservation has been moved to the bin.",
                icon: "warning",
                button: "OK"
            });
        }
    <?php } ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'warning'){ ?>
        window.onload = function(){
            swal({
                title: "Deleted Successfully!",
                text: "The reservation has been moved to the bin.",
                icon: "success",
                button: "OK"
            });
        }
    <?php } ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'permanentdelete'){ ?>
        window.onload = function(){
            swal({
                title: "Deleted Successfully!",
                text: "The reservation has permanently deleted!.",
                icon: "success",
                button: "OK"
            });
        }
    <?php } ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'oncall'){ ?>
        window.onload = function(){
            swal({
                title: "Restored Successfully!",
                text: "Restored to oncall reservations!.",
                icon: "success",
                button: "OK"
            });
        }
    <?php } ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'online'){ ?>
        window.onload = function(){
            swal({
                title: "Restored Successfully!",
                text: "Restored to online reservations!.",
                icon: "success",
                button: "OK"
            });
        }
    <?php } ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'exist'){ ?>
        window.onload = function(){
            swal({
                title: "Already Exist!",
                text: "The customer reservation is already exist!.",
                icon: "warning",
                button: "OK"
            });
        }
    <?php } ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'full_sched'){ ?>
        window.onload = function(){
            swal({
                title: "Schedule Full!",
                text: "The schedule is already book by three others!.",
                icon: "error",
                button: "OK"
            });
        }
    <?php } ?>
</script>

    </head>
