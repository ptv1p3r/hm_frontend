<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Consultas LDA ALTADVA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="static/img/favicon.png" rel="icon">
  <link href="static/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="static/css/style.css" rel="stylesheet">



  <link href="static/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="static/css/style.css" rel="stylesheet">
</head>

<body>
  <?php
  $site_header_name = 'Consultas LDA';
  $user_name = 'admin';
  ?>

<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="static/img/logo.png" alt="">
        <span class="d-none d-lg-block">Consultas LDA</span>
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

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="static/img/admin.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
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
      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Página principal</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
      <li class="nav-item">
        <a class="nav-link collapsed" href="consultas.php">
          <i class="bi bi-archive"></i>
          <span>Consultas</span>
        </a>
      </li><!-- End Consultas Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="utentes.php">
          <i class="bi bi-person"></i>
          <span>Utentes</span>
        </a>
      </li><!-- End Clientes Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="medicos.php">
          <i class="bi bi-activity"></i>
          <span>Medicos</span>
        </a>
      </li><!-- End Medicos Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Página principal</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url_for('index')}}">Home</a></li>
          <li class="breadcrumb-item active">Página principal</li>
        </ol>
      </nav>


    </div><!-- End Page Title -->





    <section class="section dashboard">
      <div class="row">









        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">


            <!-- Recent medical appointments -->
            <div class="col-12">
              <div class="card recent-sales">
                <div class="card-body">
                  <h5 class="card-title">Consultas médicas</h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Nº Consulta</th>
                        <th scope="col">Médico</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">Dia</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opções</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#100</a></th>
                        <td>Denis Botnaru</td>
                        <td><a href="#" class="text-primary"> Ginecologia</a></td>
                        <td><a href="#" class="date text-primary">04/01/2022</a></td>
                        <td><a href="#" class="date text-primary">14H00</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#101</a></th>
                        <td>Pedro Roscas</td>
                        <td><a href="#" class="text-primary"> Podologia</a></td>
                        <td><a href="#" class="date text-primary">05/01/2022</a></td>
                        <td><a href="#" class="date text-primary">16H00</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Recent medical appointments -->
         
         
         
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            </div>

            <div class="card-body">
              <h5 class="card-title">Atividade recente<span>
                </span></h5>
              <div class="activity">
                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->
              </div>
            </div>
          </div><!-- End Recent Activity -->
        </div><!-- End Right side columns -->
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="static/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="static/vendor/tinymce/tinymce.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="static/js/main.js"></script>
  <script src="static/js/user.js"></script>

</body>

</html>