<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-center">
  <a href="/Admin" class="logo d-flex align-items-center" style="margin-left:10px;">
    <img src="/img/rhn.png"
                    style="width: 50px;" alt="logo" class="shadow-light rounded-circle">
    <div class="sidebar-brand-text mx-3" style="font-size: 25px;">CertifyCraft <sup> Web</sup></div>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>

</div><!-- End Logo -->

<nav class="header-nav ms-auto" style="margin-right:90px;">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <img alt="image" src="<?= base_url() ?>assets/img/avatar-1.jpg"
                            class="rounded-circle mr-1">
        <span class="d-none d-md-block dropdown-toggle ps-2"> Hi, <?= session('name') ?> </span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <hr class="dropdown-divider">
        </li>
       
        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout">
            <i class="bi bi-box-arrow-right"></i>
            <span> Sign Out </span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
</nav>
</header><!-- End Header -->
