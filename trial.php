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
                                      <div class="row">
                                          <div class="col-md-12 col-md-offset-1">
                                              <h3>Members Table
                                                  <button type="button" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> </button>
                                              </h3>
                                          </div>
                                      </div>            
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table table-sm" id="myTable" width="100%" cellspacing="0" data-bs-toggle="table" data-bs-search="true" data-bs-show-search-clear-button="true">
                                                  <thead>
                                                      <th>Fisrtname</th>
                                                      <th>Lastname</th>
                                                      <th>Action</th>
                                                  </thead>
                                                  <tbody>
                                                      @foreach($members as $member)
                                                          <tr>
                                                              <td>{{$member->firstname}}</td>
                                                              <td>{{$member->lastname}}</td>
                                                              <td>
                                                                  <span type = "button" href="#edit{{$member->id}}" data-bs-toggle="modal" class = "text-success"><i class='fa fa-edit'></i> </span>
                                                                  <span type = "button" href="#delete{{$member->id}}" data-bs-toggle="modal" class = "text-danger" ><i class='fa fa-trash red'></i> </span>
                                                                  @include('action')
                                                                  @include('modal')
                                                              </td>
                                                          </tr>
                                                      @endforeach
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
