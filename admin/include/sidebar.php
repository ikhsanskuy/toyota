  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <?php 
    $currentPage = basename($_SERVER['SCRIPT_FILENAME'], '.php');
    ; ?>
    
      <li class="nav-item">
        <a class="nav-link <?php if ($currentPage == 'index') {echo '';} else {echo 'collapsed';} ?>" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($currentPage == 'cars') {echo '';} else {echo 'collapsed';} ?>" href="cars.php">
          <i class="bi bi-car-front-fill"></i>
          <span>Cars</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($currentPage == 'blog') {echo '';} else {echo 'collapsed';} ?>" href="blog.php">
          <i class="bi bi-pen"></i>
          <span>Blog</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($currentPage == 'testimonial') {echo '';} else {echo 'collapsed';} ?>" href="testimonial.php">
          <i class="bi bi-image-fill"></i>
          <span>Testimonial</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($currentPage == 'about') {echo '';} else {echo 'collapsed';} ?>" href="about.php">
          <i class="bi bi-info-circle"></i>
          <span>About</span>
        </a>
      </li>
      
      <!-- End Profile Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->