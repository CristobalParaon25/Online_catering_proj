<?php
  include('connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Snpmpc</title>
  <!-- Link to Bootstrap CSS file -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script defer src="node_modules/swup/dist/Swup.modern.js"></script>
  <style>
    @media (max-width: 575.98px) {
  p,label{
    font-size: 14px; /* Reduce font size for small screens */
  }
}
@media (min-width: 576px) and (max-width: 767.98px) {
    p,label{
      font-size: 16px; /* Adjust font size for medium screens */
    }
  }
  #typed-text {
  font-family: Arial, sans-serif;
  font-size: 24px;
  padding: 10px;
}

  </style>
</head>
<body>
  <!-- Navbar section -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="login.php">
        <img class="lihok" src="images/logo1.png" alt="Logo" width="70" height="50">
      </a>
      <button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menus">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#add-reserve">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const navbarToggler = document.querySelector(".navbar-toggler");
      const navbarCollapse = document.querySelector(".navbar-collapse");

      navbarToggler.addEventListener("click", function() {
        navbarCollapse.classList.toggle("show");
      });
    });
  </script>
  <!-- Banner section -->
  <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
              ></li>
              <li
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
              ></li>
              <li
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
              ></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="images/landing5.jpg"
                  class="d-block w-100"
                  alt="Restaurant"
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Welcome to our Catering services</h5>
                  <h1 id="typed-text"></h1>
                  <script>
                    const textElement = document.getElementById('typed-text');
                    const text = 'Delicious food and drinks are coming for you!'; // Text to be animated
                    const typingSpeed = 40; // Speed in milliseconds
                    const erasingSpeed = 10; // Speed in milliseconds
                    const delay = 1000; // Delay before erasing (in milliseconds)

                    let charIndex = 0;

                    function type() {
                      if (charIndex < text.length) {
                        textElement.textContent += text.charAt(charIndex);
                        charIndex++;
                        setTimeout(type, typingSpeed);
                      } else {
                        setTimeout(erase, delay);
                      }
                    }

                    function erase() {
                      if (charIndex > 0) {
                        textElement.textContent = textElement.textContent.slice(0, charIndex - 1);
                        charIndex--;
                        setTimeout(erase, erasingSpeed);
                      } else {
                        setTimeout(type, typingSpeed);
                      }
                    }

                    type();

                  </script>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="images/landing6.jpg"
                  class="d-block w-100"
                  alt="Food"
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Our Delicious Food</h5>
                  <p class="type2 col-6">.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="images/landing3.jpg"
                  class="d-block w-100"
                  alt="Drinks"
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Our Refreshing Drinks</h5>
                  <p class="type3 col-6">.</p>
                </div>
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div id="about" class="divider"style="margin-bottom: 10%;">

    </div>
  <!-- Main section -->
  <main id="" class="container my-5" >
    <section id="" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6" style="border-right:solid gray">
            <h2 class="">About Our Catering Services</h2>
            
            <p class="lead text-sm text-md text-wrap adjs">Santo Niño de Plaridel Parish Multipurpose Cooperative (SNPMPC) is composed of 400 plus members and was   first founded in 2002.
                            Located at Plaridel Baybay City Leyte (Purok 3). SNPMPC is a goods store, catering services, and a woven bag manufacturing enterprise. Its main purpose is to provide relevant quality products and services responsive to members needs. To inculcate and sustain the values of corporations among members. Also, to seek ways and means of attaining self-reliance, mutual cooperation, and an ecologically balanced community.</p>
          </div>
          <div class="mySlides col-md-6">
            <img src="images/about4.jpg" class="img-fluid rounded img-sm hov" style="width: 100%; height:390px">
          </div>
          <div class="mySlides col-md-6"">
            <img src="images/about3.jpg" class="img-fluid rounded img-sm hov" style="width: 100%; height:390px">
          </div>

          <div class="mySlides col-md-6"">
            <img src="images/about2.jpg" class="img-fluid rounded img-sm hov" style="width: 100%; height:390px">
          </div>

          <div class="mySlides col-md-6"">
            <img src="images/about1.jpg" class="img-fluid rounded img-sm hov" style="width: 100%; height:390px">
          </div>
        </div>
      </div>
    </section>
   
    <!-- divider ni-------------------------------- -->
    <div id="" class="divider"style="margin-bottom: 10%"> 
    </div>

    <div class="col-12">
        <p style="text-align: center;font-size:25px;font-weight:400">GALLERY</p>

        <div class="col-4 mx-auto">
          <p class="type adjs">Delicious food and drinks are coming for you</p>  
        </div>
      </div>
    <div class="gallery">
      <div style="background-image: url('images/gallery4.jpg');"></div>
      <div style="background-image: url('images/gallery3.jpg');"></div>
      <div style="background-image: url('images/gallery2.jpg');"></div>
      <div style="background-image: url('images/gallery.jpg');"></div>
      <div style="background-image: url('images/gallery5.jpg');"></div>
      <div style="background-image: url('images/gallery6.jpg');"></div>
    </div>

    <!-- divider ni-------------------------------- -->
   <div id="" class="divider"style="margin-bottom: 10%"> 
    </div>
    
    <div class="row">

      <div id="menus" class="divider"style="margin-bottom: 10%">
      </div>
        <!-- Sidebar section -->
        <div class="col-md-3">
          <div class="card">
            <div class="card-body shadow">
              <p class="shadow adjs" style="font-family:'Times New Roman', Times, serif;color:black;font-weight:bold;font-size:319%;font-style:italic;text-align:center">Make your events extra special</p>
              <div class="text-center">
        <button onclick="goBack()" class="btn btn-outline-dark btn-sm me-2">Back</button>
        <button onclick="showDiv()" class="btn btn-outline-dark btn-sm">View more packages</button>
      </div>
            </div>
          </div>
        </div>

        <!-- Content section -->
        <div class="col-md-9">
          <div class="container" id="container1">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-4">
                    <img src="images/package01.jpg" class="hov"alt="Food 1" style="width:100%;height:200px; border-radius:25px">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <div class="body">
                        <p style="font-weight:500">WEDDING PACKAGE</p>
                        <p style="font-style: italic;font-size:small">Includes setup and teardown of chairs, tables, lines and decorations. 
                        Buffet-style meal with choice of entrees, sides, and desserts. </p>
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#wedding">View Details</button>
                         <!-- modal details___________________________________ -->
                        <div class="modal fade" id="wedding" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-side">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Wedding Package Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>The Wedding Package includes:</p>
                                <ul>
                                  <li>Setup and teardown of chairs, tables, lines, and decorations.</li>
                                  <li>Buffet-style meal with choice of entrees, sides, and desserts.</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal details___________________________________ -->
                    </div>
                  </div>
                </div>
               
                <div class="col-md-3">
                  <div class="mb-4">
                    <img src="images/package2.jpg" class="hov" alt="Food 1" style="width:100%;height:200px; border-radius:20px">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <div class="body">
                        <p style="font-weight:500">BIRTHDAY PACKAGE</p>
                        <p style="font-style: italic;font-size:small">Tables, chairs, linens, and basic decor provided. Setup and 
                        teardown of event space. Also Table centerpieces or other decorative elements</p>
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#birthday">View Details</button>
                         <!-- modal details___________________________________ -->
                        <div class="modal fade" id="birthday" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-side">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Birthday Package Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>The Birthday Package includes:</p>
                                <ul>
                                  <li>Setup and teardown of chairs, tables, lines, and decorations.</li>
                                  <li>Buffet-style meal with choice of entrees, sides, and desserts.</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal details___________________________________ -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-4">
                    <div class="body">
                        <p style="font-weight:500">FIESTA PACKAGE</p>
                        <p style="font-style: italic;font-size:small">Tables, chairs, linens, and basic decor provided. Setup and 
                        teardown of event space. Buffet-style meal with choice of entrees, sides, and desserts. Table centerpieces or other decorative elements</p>
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#fiesta">View Details</button>
                         <!-- modal details___________________________________ -->
                        <div class="modal fade" id="fiesta" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-side">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Fiesta Package Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>The Fiesta Package includes:</p>
                                <ul>
                                  <li>Setup and teardown of chairs, tables, lines, and decorations.</li>
                                  <li>Buffet-style meal with choice of entrees, sides, and desserts.</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal details___________________________________ -->
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <img src="images/package3.jpg" class="hov"alt="Food 1" style="width:100%;height:200px; border-radius:20px">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <div class="body">
                        <p style="font-weight:500">DEBUT PACKAGE</p>
                        <p style="font-style: italic;font-size:small">Tables, chairs, linens, and basic decor provided. 
                        Buffet-style meal with choice of entrees, sides, and desserts. Table centerpieces or other decorative elements</p>
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#debut">View Details</button>
                         <!-- modal details___________________________________ -->
                        <div class="modal fade" id="debut" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-side">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Debut Package Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>The Debut Package includes:</p>
                                <ul>
                                  <li>Setup and teardown of chairs, tables, lines, and decorations.</li>
                                  <li>Buffet-style meal with choice of entrees, sides, and desserts.</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal details___________________________________ -->
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <img src="images/package4.jpg"class="hov" alt="Food 1" style="width:100%;height:200px; border-radius:20px">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container " id="container2" style="display:none;">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-4">
                    <img src="images/package5.jpg" class="hov"alt="Food 1" style="width:100%;height:200px; border-radius:25px">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <div class="body">
                        <p style="font-weight:500">CHRISTENING PACKAGE</p>
                        <p style="font-style: italic;font-size:small">Tables, chairs, linens, and basic decor provided
                          Setup and teardown of event space. Brunch or lunch buffet with choice of entrees, sides, and desserts</p>
                          <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#christening">View Details</button>
                         <!-- modal details___________________________________ -->
                        <div class="modal fade" id="christening" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-side">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Christening Package Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>The Christening Package includes:</p>
                                <ul>
                                  <li>Setup and teardown of chairs, tables, lines, and decorations.</li>
                                  <li>Buffet-style meal with choice of entrees, sides, and desserts.</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal details___________________________________ -->
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <img src="images/package6.jpg" class="hov"alt="Food 1" style="width:100%;height:200px; border-radius:20px">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <div class="body">
                        <p style="font-weight:500">PARTY PACKAGE</p>
                        <p style="font-style: italic;font-size:small">Appetizers or buffet-style meal with choice of entrees, sides, and desserts
                        Tables, chairs, linens, and basic decor provided. Setup and teardown of event space</p>
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#party">View Details</button>
                         <!-- modal details___________________________________ -->
                        <div class="modal fade" id="party" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-side">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Party Package Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>The Party Package includes:</p>
                                <ul>
                                  <li>Setup and teardown of chairs, tables, lines, and decorations.</li>
                                  <li>Buffet-style meal with choice of entrees, sides, and desserts.</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal details___________________________________ -->
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-4">
                    <div class="body">
                        <p style="font-weight:500">DEATH ANNVERSARY PACKAGE</p>
                        <p style="font-style: italic;font-size:small">Floral arrangements or memorial candles. Buffet-style meal with 
                          choice of entrees, sides, and desserts. Tables, chairs, linens, and basic decor provided</p>
                          <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#death">View Details</button>
                         <!-- modal details___________________________________ -->
                        <div class="modal fade" id="death" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-side">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Death Anniversary Package Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>The Death Anniversary Package includes:</p>
                                <ul>
                                  <li>Setup and teardown of chairs, tables, lines, and decorations.</li>
                                  <li>Buffet-style meal with choice of entrees, sides, and desserts.</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal details___________________________________ -->
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <img src="images/package8.jpg" class="hov"alt="Food 1" style="width:100%;height:200px; border-radius:20px">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <div class="body">
                        <p style="font-weight:500">WEDDING ANNIVERSARY PACKAGE</p>
                        <p style="font-style: italic;font-size:small">Buffet-style meal with choice of entrees, sides, and desserts. Tables, 
                          chairs, linens, and basic decor provided</p>
                          <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#weddingA">View Details</button>
                         <!-- modal details___________________________________ -->
                        <div class="modal fade" id="weddingA" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-side">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Wedding Anniversary Package Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>The Wedding Anniversary Package includes:</p>
                                <ul>
                                  <li>Setup and teardown of chairs, tables, lines, and decorations.</li>
                                  <li>Buffet-style meal with choice of entrees, sides, and desserts.</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal details___________________________________ -->
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-4">
                    <img src="images/package7.jpg"class="hov" alt="Food 1" style="width:100%;height:200px; border-radius:20px">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    <!-- divider ni-------------------------------- -->
    <div id="add-reserve" class="divider"style="margin-bottom: 10%"> 
      </div>
      <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Get form data
          $contactName = $_POST["contactName"];
          $address = $_POST["address"];
          $orderName = $_POST["orderName"];
          $schedule = $_POST["schedule"];
          $orderTime = $_POST["orderTime"];
          $heads = $_POST["heads"];
          $venue = $_POST["venue"];
          $message = $_POST["message"];
          $contact = $_POST["contact"];

          // Check if the same schedule already exists three times
          $query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM (
              SELECT schedule FROM online_reservations WHERE schedule = '$schedule'
              UNION ALL
              SELECT schedule FROM reservations WHERE schedule = '$schedule'
          ) AS combined_reservations");

          $row = mysqli_fetch_assoc($query);
          $count = $row['count'];

          if ($count >= 3) {
              echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>';
              echo "<script>Swal.fire('Sorry!', 'The schedule is already full!', 'error')</script>";
          } else {
            // Check if the contact name already exists
            $sql_check_name = "SELECT * FROM online_reservations WHERE contactName='$contactName'";
            $result_name = mysqli_query($conn, $sql_check_name);
            if (mysqli_num_rows($result_name) > 0) {
              echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>';
              echo "<script>Swal.fire('Error!', 'You already have a reservation!', 'error')</script>";
            } else {
              // Insert data into online_reservations table
              $sql_insert_message = "INSERT INTO online_reservations (contactName, orderName, address, orderTime, heads, schedule, venue, message, contact) 
                                    VALUES ('$contactName', '$orderName', '$address', '$orderTime', '$heads', '$schedule', '$venue', '$message', '$contact')";
              if (mysqli_query($conn, $sql_insert_message)) {
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>';
                echo "<script>Swal.fire('Success!', 'Reserve successfully! Take note that we will call you before 3 days of your schedule!', 'success')</script>";
              } else {
                echo "Error: " . $sql_insert_message . "<br>" . mysqli_error($conn);
              }
            }
          }
        }
      ?>


    <!-- reservation form ni diri -->
    <div class="row">
      <div class="col-md-9">
          <p style="text-align: center;font-size:larger;font-weight:400">PLAN YOUR EVENT WITH US</p>
          <form class= "center"  method="post">
            <input type="hidden" name="hiddenID" value="<?=$id?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="labelcolor">Customer Name:</label>
                        <input type="text" name="contactName" class="form-control" required 
                        style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="labelcolor">Address:</label>
                        <input type="text" name="address" class="form-control" required 
                        style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="labelcolor">Event Name:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <label class="input-group-text labelcolor" for="inputGroupSelect01">Select</label>
                      </div>
                      <select class="custom-select" name="orderName" 
                      style="width:83%;border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
                          <option></option>
                          <option value="Birthday Package">Birthday Package</option>
                          <option value="Wedding Package">Wedding Package</option>
                          <option value="Fiesta Package">Fiesta Package</option>
                          <option value="Christening Package">Christening Package</option>
                          <option value="Debut Package">Debut Package</option>
                          <option value="Party Package">Party Package</option>
                          <option value="Death Anniversary">Death Anniversary</option>
                          <option value="Wedding Anniversary">Wedding Anniversary</option>
                      </select>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="labelcolor">Event Schedule:</label>
                        <input type="date" name="schedule" class="form-control" required
                        style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="labelcolor">Event Time:</label>
                        <div class="alert alert-danger alert-sm mt-2 d-none" id="timeAlert">
                          We can't cater from 10pm - 3am!.
                        </div>
                        <input type="time" name="orderTime" class="form-control" required
                        style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
                    </div>
                </div>
                <script>
                  const orderTimeInput = document.querySelector('input[name="orderTime"]');
                  const timeAlert = document.getElementById('timeAlert');

                  orderTimeInput.addEventListener('input', restrictTimeRange);

                  function restrictTimeRange() {
                    const selectedTime = orderTimeInput.value;
                    const selectedHour = parseInt(selectedTime.split(':')[0], 10);

                    if (selectedHour < 3 || selectedHour >= 20) {
                      orderTimeInput.value = '';
                      timeAlert.classList.remove('d-none');
                    } else {
                      timeAlert.classList.add('d-none');
                    }
                  }
                </script>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="labelcolor">Heads:</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <label class="input-group-text labelcolor" for="inputGroupSelect01">₱250(Per head)</label>
                          </div>
                          <input type="number" name="heads" class="form-control" required
                            style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="labelcolor">Venue:</label>
                        <input type="text" name="venue" class="form-control" required
                        style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="labelcolor">Contact No:</label>
                        <input type="text" name="contact" class="form-control" required
                        style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
                    </div>
                </div>
                <div class="form-group col-lg-12">
                <label class="labelcolor" for="exampleFormControlTextarea1">You can also specify your orders here:</label>
                <textarea class="form" id="exampleFormControlTextarea1" name="message"
                style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd;
                max-height:45%;width:100%"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <!-- Button trigger modal -->
                <button type="button" class="btn buttons" style="border: 1px solid black;" data-bs-toggle="modal" data-bs-target="#reservationModal">
                  Submit Reservation
                </button>

                <!-- Modal -->
                <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="reservationModalLabel">Reservation Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Are you sure you want to submit this reservation?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </form>
      </div>
      <div class="col-md-3">
          <div class="card">
            <div class="card-body shadow">
              <p class="moves" style="font-family:'Times New Roman', Times, serif;color:black;font-weight:bold;font-size:38px;font-style:italic;text-align:center">Let’s make your event one to remember</p>
              <p>To help you craft the best plan for your event, please share with us some details about your event by filling up the reservation form. Thank you!</p>
            </div>
          </div>
        </div>
    </div>
    <div class="row testimonials">
      <div class="col-12">
        <p style="text-align: center;font-size:25px;font-weight:400">TESTIMONIALS</p>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <img
            src="images/testimonials.jpg"
            alt="Customer"
          />
          <p style="text-align: center;font-size:20px;font-weight:500">Jan Kerlen Metra</p>
          <p style="text-align: center;font-size:17px;font-weight:400">
            "The food here is absolutely amazing! I tried the steak and it
            was cooked to perfection. The service is also excellent. Highly
            recommend!"
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <img
            src="images/testimonials2.jpg"
            alt="Customer"
          />
          <p style="text-align: center;font-size:20px;font-weight:500">Alma Colina</p>
          <p style="text-align: center;font-size:17px;font-weight:400">
            "I came here with my friends and we had a great time. The
            cocktails were fantastic and the staff were very friendly and
            welcoming. We will definitely be back!"
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <img
            src="images/testimonials3.jpg"
            alt="Customer"
          />
          <p style="text-align: center;font-size:20px;font-weight:500">Quennie Escobidal</p>
          <p style="text-align: center;font-size:17px;font-weight:400">
            "I've been to many restaurants in the area, but this one is by
            far the best. The food is always fresh and delicious, and the
            atmosphere is very cozy and inviting. Highly recommend!"
          </p>
        </div>
      </div>
    </div>
  </div>
  </main>
  

   <!-- divider ni-------------------------------- -->
   <div id="" class="divider"style="margin-bottom: 10%"> 
    </div>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
    <p style="text-align: center;font-size:25px;font-weight:400">FEEDBACK</p>
      <form class="needs-validation" method="post" action="messages.php" novalidate>
        <div class="form-group">
          <label for="feedbackName" class="form-label">Name:</label>
          <input type="text" class="form-control name" id="name" name="name"
          style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
        </div>
        <div class="form-group">
          <label for="feedbackEmail" class="form-label">Email address:</label>
          <input type="email" class="form-control" id="email" name="email"
          style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd">
        </div>
        <div class="form-group">
          <label for="feedbackMessage" class="form-label">Comment:</label>
          <textarea class="form-control" id="message" name="message" rows="2" 
          style="border-right: 1px solid #f5f5f5;border-left: 1px solid #f5f5f5;border-bottom: 1px solid black;border-top: 1px solid #f5f5f5;background-color:#f5f5fd"></textarea>
        </div>
        <div class="col-lg-12 d-flex mt-2 justify-content-center">
        <button type="button" class="btn buttons" data-bs-toggle="modal" data-bs-target="#confirmModal" style="border:1px solid black;">
          Submit Feedback
        </button>

        <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirm Submission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure you want to submit your feedback?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>

      </div>
      </form>
    </div>
  </div>
</div>

  <!-- Footer section -->
  <footer class="bg-dark" style="background-image: url('images/footer.jpeg'); background-size: cover;">
  <div class="container-fluid text-white">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
        <div class="col-lg-4 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>Plaridel, Baybay City, Leyte</p>
            <p><i class="fa fa-phone-alt mr-2"></i>09196224054</p>
            <p class="m-0"><i class="fa fa-envelope mr-2"></i>snpmpc@example.com</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
            <p>Santo Nino Plaridel Parish Multi-purpose Cooperative</p>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://web.facebook.com/snppmpccoop"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
            <div>
                <h6 class="text-white text-uppercase">Monday - Friday</h6>
                <p>8.00 AM - 8.00 PM</p>
                <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
    </div>
    <div id="contact" class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="mb-2 text-white">&copy; 2023 All Rights Reserved.</a></p>
        <p class="m-0 text-white">Developed by <a class="font-weight-bold" href="https://github.com/CristobalParaon25">Cristobal Paraon</a></p>
    </div>
  </div>
</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
    <!-- Link to Bootstrap JavaScript file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="main.js"></script>
</body>
</html>

 