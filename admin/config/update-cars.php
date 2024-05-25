<?php
session_start();
include "../../connection.php";

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');
        location.href= 'login.php'
        </script>";
}


function format_uang($angka)
{
    return number_format($angka, 0, ",", ".");
}

$fetch = $con->query("SELECT * FROM cars WHERE id='$_GET[id]'");
$show = $fetch->fetch_assoc();


if (isset($_POST['submit'])) {
    // $carId = intval($_POST['carId']);
    $name = htmlspecialchars($_POST['name']);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $type = htmlspecialchars($_POST['type']);
    $active = htmlspecialchars($_POST['active']);
    // $active = htmlspecialchars($_POST['active']) === '1' ? 1 : 0;
    // $active = isset($_POST['active']) ? ($_POST['active'] == '1' ? 1 : 0) : $show['active'];
    $active = isset($_POST['active']) ? (int)$_POST['active'] : $show['active'];

    $namafoto = $_FILES['photo']['name'];
    $lokasifoto = $_FILES['photo']['tmp_name'];

    // var_dump($name, $price, $type, $active);
    // die();
    // jika foto diubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../file/photo/$namafoto");

        $query = mysqli_query($con, "UPDATE `cars` SET 
		`name` = '$name', 
		`price` = '$price', 
		`type` = '$type', 
		`active` = '$active', 
		`photo` = '$namafoto'
		WHERE `id` = '$_GET[id]'");
    } else {
        $query = mysqli_query($con, "UPDATE `cars` SET 
		`name` = '$name', 
		`price` = '$price', 
		`type` = '$type', 
		`active` = '$active'
		WHERE `id` = '$_GET[id]'");
    }

    if ($query) {
        echo "<script>
        alert('Data Diubah');
        location='../cars.php'; </script>";
    } else {
        echo "<script>alert('Data Gagal Diubah'); </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Page</title>

    <meta
        content="Temukan penawaran terbaik untuk mobil Toyota di Tangerang! Kami menawarkan berbagai pilihan Toyota baru dan bekas dengan diskon dan promosi luar biasa."
        name="description">
    <meta content="toyota murah, promo toyota, toyota tangerang" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <span class="d-none d-lg-block">Admin Page</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <!-- <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <?php 
$currentPage = basename($_SERVER['SCRIPT_FILENAME'], '.php');
; ?>

            <li class="nav-item">
                <a class="nav-link <?php if ($currentPage == 'index') {echo '';} else {echo 'collapsed';} ?>"
                    href="../index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($currentPage == 'cars') {echo '';} else {echo 'collapsed';} ?>"
                    href="../cars.php">
                    <i class="bi bi-car-front-fill"></i>
                    <span>Cars</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($currentPage == 'blog') {echo '';} else {echo 'collapsed';} ?>"
                    href="../blog.php">
                    <i class="bi bi-pen"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($currentPage == 'testimonial') {echo '';} else {echo 'collapsed';} ?>"
                    href="../testimonial.php">
                    <i class="bi bi-image-fill"></i>
                    <span>Testimonial</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($currentPage == 'about') {echo '';} else {echo 'collapsed';} ?>"
                    href="../about.php">
                    <i class="bi bi-info-circle"></i>
                    <span>About</span>
                </a>
            </li>

            <!-- End Profile Page Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

<div class="pagetitle">
  <h1>Update Car</h1>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Horizontal Form</h5>

          <!-- Horizontal Form -->
          <form action="" method="post" enctype="multipart/form-data">
            

            <div class="row mb-3">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="<?= $show['name']?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="price" class="col-sm-2 col-form-label">Price</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="price" value="<?= number_format($show['price'])?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="price" class="col-sm-2 col-form-label">Price</label>
              <div class="col-sm-10">
              <select name="type" class="form-select">
                <?php
                $current_type = $show['type']; // assume this is the current value from the database
                $options = array('mpv', 'suv', 'hatchback', 'electrified', 'sports', 'sedan', 'commercial');
                foreach ($options as $option) {
                    $selected = ($option == $current_type) ? ' selected' : '';
                    echo "<option value='$option'$selected>$option</option>";
                }
                ?>
                </select>
              </div>
            </div>


            <div class="row mb-3">
              <label for="active" class="col-sm-2 col-form-label">Active</label>
              <div class="col-sm-10">
                <select name="active" class="form-select">
                <?php
                    $current_type = $show['active']; // assume this is the current value from the database
                    $options = [
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ];

                    foreach ($options as $value => $label) {
                        $selected = ($value == $current_type) ? ' selected' : '';
                        echo "<option value='$value'$selected>$label</option>";
                    }
                ?>
                </select>
              <!-- <input class="form-check-input" type="checkbox" name="active" value="1" <?= $show['active']==1 ? 'checked' : '' ?>>
              <input type="hidden" name="active" value="0">  </div> -->
              </div>
            </div>

            <div class="row mb-3">
              <label for="photo" class="col-sm-2 col-form-label">Photo</label>
              <div class="col-sm-10">
              <img class="col-sm-5 d-block" src="../file/photo/<?= $show['photo']?>" alt="Car Image">  
              <input type="file" name="photo" class="form-control">
              </div>
            </div>
                
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>