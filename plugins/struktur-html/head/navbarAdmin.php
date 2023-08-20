<body class="admin">
  <header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-center" href="<?= $url ?>/admin">PD IPM Bulukumba</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->

    <a class="btn btn-warning w-smart" style="display: none;" href="<?= $url ?>">Keluar</a>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="btn btn-warning w-deks" href="<?= $url ?>">Keluar</a>
      </li>
    </ul>



  </header>

  <div class="container-fluid">
    <!-- penutup ada di body Admin -->
    <div class="row">
      <!-- penutup ada di body Admin -->
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" id="dsh" aria-current="page" href="<?= $url ?>/admin">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="databaseX" href="#">
                <span data-feather="layers"></span>
                Database
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profil" href="#">
                <span data-feather="layers"></span>
                Profil
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="ipmers" href="#">
                <span data-feather="users"></span>
                IPMers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="lembaga" href="#">
                <span data-feather="bar-chart-2"></span>
                Lembaga
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="direktori" href="#">
                <span data-feather="file"></span>
                Direktori
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="setting" href="#">
                <span data-feather="settings"></span>
                settings
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul>
        </div>
      </nav>