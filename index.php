<?php include 'connection.php' ; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toyota</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-27395ECG0Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-27395ECG0Q');
</script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="" width="70%">
        <!-- <h1>Yummy<span>.</span></h1> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#vehicles">Vehicles</a></li>
          <li><a href="#testimonial">Testimonial</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <!-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Hero Section -->

  <!-- <section><img src="assets/img/agya.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300"></section> -->
    <section id="home">
    
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/agya.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/bz4x.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/innova.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="about" class="why-us section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>About us</h2>
          <p>Here, <span>Why us?</span></p>
        </div>
        <div class="row text-center">
            <div class="col-sm-4">
              <div class="card text-center" style="width: 100%;">
                <div class="card-body">
                                    
                  <lord-icon
                      src="https://cdn.lordicon.com/tftaqjwp.json"
                      trigger="loop"
                      style="width:50px;height:50px">
                  </lord-icon><br>
                  <h4 class="text-danger mt-3">Harga Terbaik</h4>
                  <p class="mt-1" >Kami Selalu Memberikan Harga Dan Penawaran Promo Terbaik Dengan Kemudahan Dalam Transaksi.<br></p>

                </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-center" style="width: 100%;">
              <div class="card-body">

                <lord-icon
                src="https://cdn.lordicon.com/slduhdil.json"
                trigger="loop"
                style="width:50px;height:50px">
                </lord-icon><br>
                <h4 class="text-danger mt-3">Dealer Resmi Toyota</h4>
                <p class="mt-1">Dealer Resmi Toyota Terpercaya dan sudah Puluhan Tahun Melayani Penjualan Unit Toyota ke Seluruh Indonesia.</p>

              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-center" style="width: 100%;">
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->

                <lord-icon
                src="https://cdn.lordicon.com/iizhfivi.json"
                  trigger="loop"
                  style="width:50px;height:50px">
                </lord-icon><br>
                <h4 class="text-danger mt-3">Pelayanan 24 Jam</h4>
                <p class="mt-1">Pelayanan kami 24 jam untuk anda, Seputar Konsultasi pembelian Mobil Baru, Dan Problem Kendaraan anda.</p>

              </div>
            </div>
          </div>
      
        
        <!-- <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Yummy?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          End Why Box

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-tag"></i>
                  
                  <lord-icon
                      src="https://cdn.lordicon.com/tftaqjwp.json"
                      trigger="loop"
                      style="width:50px;height:50px">
                  </lord-icon><br>
                  <h4>Harga Termurah</h4>
                  <p>Kami Selalu Memberikan Harga Dan Penawaran Promo Termurah Dengan Kemudahan Transaksi.</p>
                </div>
              </div>End Icon Box

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <lord-icon
                    src="https://cdn.lordicon.com/slduhdil.json"
                    trigger="loop"
                    style="width:50px;height:50px">
                </lord-icon><br>
                  <h4>Dealer Resmi Toyota</h4>
                  <p>Dealer Resmi Toyota Terpercaya dan sudah Puluhan Tahun Melayani Penjualan Unit Toyota ke Seluruh Indonesia.</p>
                </div>
              </div>End Icon Box

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <lord-icon
                  src="https://cdn.lordicon.com/iizhfivi.json"
                    trigger="loop"
                    style="width:50px;height:50px">
                </lord-icon><br>
                  <h4>Pelayanan 24 Jam</h4>
                  <p>Pelayanan kami 24 jam untuk anda, Seputar Konsultasi pembelian Mobil Baru, Dan Problem Kendaraan anda.</p>
                </div>
              </div>End Icon Box

            </div>
          </div>

          </div> -->
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <!-- <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div>End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div>End Stats Item

        </div>

      </div>
    </section> -->
    <!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="vehicles" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Vehicles</h2>
          <p>Check Our <span>Vehicles</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#mpv">
              <h4>MPV</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#suv">
              <h4>SUV</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#hatchback">
              <h4>Hatchback</h4>
            </a>
          </li><!-- End tab nav item -->

             <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#electrified">
              <h4>Electrified</h4>
            </a>
          </li><!-- End tab nav item -->

                    <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#sports">
              <h4>Sports</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#sedan">
              <h4>Sedan</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#commercial">
              <h4>Commercial</h4>
            </a>
          </li><!-- End tab nav item -->
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">



          <div class="tab-pane fade active show" id="mpv">

            <div class="tab-header text-center">
              <p>Vehicles</p>
              <h3>MPV</h3>
            </div>

            
            <div class="row gy-5">
              <?php $fetch=$con->query("SELECT * FROM cars WHERE `type` = 'mpv' AND `active` = 1"); ?>
              <?php while ($data = $fetch->fetch_assoc()) { ?>

              <div class="col-lg-4 menu-item">

                <img src="admin/file/photo/<?= $data['photo'] ; ?>" class="menu-img img-fluid" alt="">

                <h4>
                <?= $data['name'] ; ?>
                </h4>

                <p class="ingredients">
                  Starting from
                </p>

                <p class="price">
                Rp. <?= $data['price'] ; ?>
                </p>

                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-11/brochures/Catalog%20All%20New%20Kijang%20Innova%20Zenix%20%2821%20Nov%29_1.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                </a>
                
              </div>

              <?php } ; ?>
             </div>

          </div>

          <div class="tab-pane fade" id="suv">

            <div class="tab-header text-center">
              <p>Vehicles</p>
              <h3>SUV</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/raize.png" class="menu-img img-fluid" alt="">
                <h4>
                  All New Raize GR Sport
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp235.000.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-08/brochures/leaflet_raize_grs_0722.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/fortuner.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Fortuner GR Sport
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp604.450.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-09/brochures/Catalog_Fortuner_GR_Sport_0922_compressed_0.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/corolacros.png" class="menu-img img-fluid" alt="">
                <h4>
                  All New Corolla Cross Hybrid
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp568.200.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-07/brochures/catalog_corolla_cross_q2_0722_1.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/rush.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Rush GR Sport
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp282.700.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-01/brochures/leaflet_rush_gr_update_jan_2022.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/lc.png" class="menu-img img-fluid" alt="">
                <h4>
                  All New Land Cruiser
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp2.521.400.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-10/brochures/catalogue_LC300_191022.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

            </div>



          </div>

          <div class="tab-pane fade" id="hatchback">

            <div class="tab-header text-center">
              <p>Vehicles</p>
              <h3>Hatchback</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/agya.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Agya GR Sport
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp167.900.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-08/brochures/leaflet_agya_0722.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/yariss.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Yaris GR Sport
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp338.200.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-08/brochures/leaflet_yaris_2022.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

            </div>
          </div>


          <div class="tab-pane fade" id="electrified">

            <div class="tab-header text-center">
              <p>Vehicles</p>
              <h3>Electrified</h3>
            </div>

            <div class="row gy-5">
              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
                <button type="button" class="btn btn-success">Primary</button>
              </div> -->
              
              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/zenix.png" class="menu-img img-fluid" alt="">
                <h4>
                  All New Kijang Innova Zenix Hybrid EV
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                   Rp471.600.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-11/brochures/catalog_all_new_kijang_innova_zenix_hybrid_ev_0.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/bz4x.png" class="menu-img img-fluid" alt="">
                <h4>
                  All New BZ4X
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp1.190.000.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-11/brochures/catalog_bz4x_compressed.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/chr.png" class="menu-img img-fluid" alt="">
                <h4>
                  New C-HR Hybrid
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp601.000.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2023-01/brochures/leaflet_c-hr_Dec2022.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/altis.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Corolla Altis Hybrid
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp593.300.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-02/brochures/Catalogue_Corolla_Altis_2022.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/corollacross.png" class="menu-img img-fluid" alt="">
                <h4>
                  All New Corolla Cross Hybrid
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp568.200.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-07/brochures/catalog_corolla_cross_q2_0722.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/camryhybrid.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Camry Hybrid
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp937.400.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-07/brochures/catalogue_camry_0722.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

            </div>
          </div>

                    <div class="tab-pane fade" id="sports">

            <div class="tab-header text-center">
              <p>Vehicles</p>
              <h3>Sports</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/supra.png" class="menu-img img-fluid" alt="">
                <h4>
                  New GR Supra
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp2.188.400.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-12/brochures/Flyer_GR_Supra_2022.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/86.png" class="menu-img img-fluid" alt="">
                <h4>
                  All New GR 86
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp984.100.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-08/brochures/leaflet_gr86_new_compressed.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/yaris.png" class="menu-img img-fluid" alt="">
                <h4>
                  GR Yaris
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Sold Out
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-09/brochures/catalogue_gr_yaris_compressed.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              
            </div>
          </div>

          <div class="tab-pane fade" id="sedan">

            <div class="tab-header text-center">
              <p>Vehicles</p>
              <h3>Sedan</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/vios.png" class="menu-img img-fluid" alt="">
                <h4>
                  All New Vios
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp322.900.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-10/brochures/leaflet_all_new_vios_1.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/altiss.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Corolla Altis
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp538.900.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-02/brochures/Catalogue_Corolla_Altis_2022_0.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/camry.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Camry
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp799.300.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-09/brochures/catalogue_camry_0722.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>


            </div>
          </div>

          <div class="tab-pane fade" id="commercial">

            <div class="tab-header text-center">
              <p>Vehicles</p>
              <h3>Commercial</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/hilux.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Hilux GR Sport
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp731.400.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-12/brochures/flyer_hilux_gr.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/dyna.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Dyna
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp377.300.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-04/brochures/Leaflet_New_Dyna_compressed.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/hiace.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Hiace Commuter
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp561.800.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-04/brochures/leaflet_hiace_080422_0.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/hiacep.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Hiace Premio
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp647.300.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-04/brochures/leaflet_hiace_080422.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/hiluxd.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Hilux D Cab
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp520.800.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-07/brochures/catalogue_hilux_q2_0722_compressed_0.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>

              <div class="col-lg-4 menu-item">
                <img src="assets/img/menu/hiluxs.png" class="menu-img img-fluid" alt="">
                <h4>
                  New Hilux S Cab
                </h4>
                <p class="ingredients">
                  Starting from
                </p>
                <p class="price">
                  Rp277.200.000
                </p>
                <a href="http://wa.me/6281218660906" class="btn btn-outline-success mb-3" target="_blank">Harga Promo</a><br>
                  <a href="https://www.toyota.astra.co.id/sites/default/files/2022-07/brochures/flyer_hilux_s_cab_q2_0722_compressed.pdf" target="_blank">
                    <lord-icon
                    src="https://cdn.lordicon.com/iiixgoqp.json"
                    trigger="loop"
                    style="width:25px;height:25px">
                    </lord-icon><br>  
                    <small>Lihat E-Brochure</small>
                  </a>
              </div>


            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>
            End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>End testimonial item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <!-- <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">$99</div>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>
            </div>End Event item

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
              <h3>Private Parties</h3>
              <div class="price align-self-start">$289</div>
              <p class="description">
                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
              </p>
            </div>End Event item

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p>
            </div>End Event item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>End Chefs Member

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>End Chefs Member

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>End Chefs Member

        </div>

      </div>
    </section> -->
    <!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    <!-- <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book A Table</h2>
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Book a Table</button></div>
            </form>
          </div>End Reservation Form

        </div>

      </div>
    </section> -->
    <!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="testimonial" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonial</h2>
          <p>Check <span>Our Testimonial</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/1.jpeg"><img src="assets/img/gallery/1.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/2.jpeg"><img src="assets/img/gallery/2.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/3.jpeg"><img src="assets/img/gallery/3.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/4.jpeg"><img src="assets/img/gallery/4.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/5.jpeg"><img src="assets/img/gallery/5.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/6.jpeg"><img src="assets/img/gallery/6.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/7.jpeg"><img src="assets/img/gallery/7.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/8.jpeg"><img src="assets/img/gallery/8.jpeg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.5958890595102!2d106.6189275!3d-6.1848018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ffd68f3fd4cd%3A0x53f47f5798adbe6d!2sTunas%20Toyota%20Tangerang!5e0!3m2!1sen!2sid!4v1676362162784!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.5958890595102!2d106.6189275!3d-6.1848018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ffd68f3fd4cd%3A0x53f47f5798adbe6d!2sTunas%20Toyota%20Tangerang!5e0!3m2!1sen!2sid!4v1676362162784!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i>
                <lord-icon 
                src="https://cdn.lordicon.com/slduhdil.json"
                trigger="loop"
                style="width:50px;height:50px">
                </lord-icon>
              </i>

              <div class="ms-3">
                <h3 >Our Address</h3>
                <strong>
                  Jl. Raya Merdeka No.8, RT.001/RW.002, Cimone Jaya, Kec. Karawaci, Kota Tangerang, Banten 15114</strong>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i>
                <lord-icon 
                src="https://cdn.lordicon.com/ehfubvwr.json"
                trigger="loop"
                style="width:50px;height:50px">
                </lord-icon>
              </i>
              <div class="ms-3">
                <h3>Email Us</h3>
                <strong>inna.toyota.pin@gmail.com</strong>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i>
                <lord-icon 
                src="https://cdn.lordicon.com/tftaqjwp.json"
                trigger="loop"
                style="width:50px;height:50px">
                </lord-icon>
              </i>
              <div class="ms-3">
                <h3>Call Us</h3>
                <strong>+62 812 1866 0906</strong><br>
                <strong>+62 812 8866 6806</strong>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i>
                <lord-icon 
                src="https://cdn.lordicon.com/qmuwmmnl.json"
                trigger="loop"
                style="width:50px;height:50px">
                </lord-icon>
              </i>
              <div class="ms-3">
                <h3>Opening Hours</h3>
                <div>
                  <strong>Mon-Fri:</strong> 8.30 AM - 16.30 PM <br>
                  <strong>Saturday:</strong> 8.30 AM - 14.30 PM <br>
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form> -->
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <!-- <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div> -->

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Toyota</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Shelby Company</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>