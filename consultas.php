<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Consultas LDA</title>
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
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Página principal</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
      <li class="nav-item">
        <a class="nav-link" href="consultas.php">
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
          <span>Médicos</span>
        </a>
      </li><!-- End Médicos Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  <div class="col-auto d-none d-sm-block">
    <h1>Consultas</h1>
  </div>

    <section class="section">
 
      <div class="container">
        <div class="row"> 
        <div class="col-12 mb-3">
            <a href="#addEmployeeModal" type="button" class="btn btn-primary btn-lg float-end" data-toggle="modal"><i class="material-icons"></i> <span>Criar Consulta</span></a>
            <p id="success"></p>
              </div>
        </div>
        <!-- Recent medical appointments -->
        <div class="col-12">
          <div class="card recent-sales">
            <div class="card-body">
            <h5 class="card-title">Consultas criadas</h5>
              <th>
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">Nº Utente</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Morada</th>
                      <th scope="col">Cidade</th>
                      <th scope="col">Telemóvel</th>
                      <th scope="col">Opções</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#">#100</a></th>
                      <td><a href="#" class="text-primary">Denis Botnaru</a></td>
                      <td><a href="#" class="text-primary"> Rua das carochas, n5</a></td>
                      <td><a href="#" class="date text-primary">Portimão</a></td>
                      <td><a href="#" class="date text-primary">961111222</a></td>
                      <!-- <td><a href="#"><i class="size-26" data-feather="edit"></i></a></td>
                      <td><a href="#"><i class="size-26" data-feather="eye"></i></a></td>
                      <td><a href="#"><i class="size-26" data-feather="x"></i></a>  -->

                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#101</a></th>
                      <td><a href="#" class="text-primary">Joaquim Roscas</a></td>
                      <td><a class="text-primary"> Rua das carochas, n5</a></td>
                      <td><a class="text-primary">Portimão</a></td>
                      <td><a class="text-primary">961111222</a></td>
                    </tr>

                    <!-- PHP dados tabela -->

             

                  <!--   Fim PHP dados tabela -->

                  </tbody>
                </table>
            </div>
          </div>
        </div><!-- End Recent medical appointments -->
      </div>
      </div>

    


      <!-- Add Modal HTML -->
      <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="user_form">
              <div class="modal-header">
                <h4 class="modal-title">Criar Consulta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>EMAIL</label>
                  <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>PHONE</label>
                  <input type="phone" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>CITY</label>
                  <input type="city" id="city" name="city" class="form-control" required>
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" value="1" name="type">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                <button type="button" class="btn btn-primary" id="btn-add">Adicionar</button>
              </div>
            </form>
          </div>
        </div>
      </div>



      <!-- Edit Modal HTML -->
      <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="update_form">
              <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="id_u" name="id" class="form-control" required>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" id="name_u" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" id="email_u" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>PHONE</label>
                  <input type="phone" id="phone_u" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input type="city" id="city_u" name="city" class="form-control" required>
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" value="2" name="type">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <button type="button" class="btn btn-info" id="update">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>



      <!-- Delete Modal HTML -->
      <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>

              <div class="modal-header">
                <h4 class="modal-title">Delete User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="id_d" name="id" class="form-control">
                <p>Are you sure you want to delete these Records?</p>
                <p class="text-warning"><small>This action cannot be undone.</small></p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <button type="button" class="btn btn-danger" id="delete">Delete</button>
              </div>
            </form>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>

</body>

</html>