<?php
  //get URL
  $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
  $path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);        
?>
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

  <link href="static/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="static/css/user.css" rel="stylesheet">
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
          <i class="bi bi-person"></i>
          <span>Médicos</span>
        </a>
      </li><!-- End Médicos Page Nav -->
      <li class="nav-item">
        <a class="nav-link" href="especialidades.php">
          <i class="bi bi-activity"></i>
          <span>Especialidades</span>
        </a>
      </li><!-- End Especialidades Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  <div class="row mb-2 mb-xl-3">
  <div class="col-auto d-none d-sm-block">
    <h1>Especialidades</h1>
  </div><!-- End Page Title -->

    <section class="section">
 
      <div class="container">
        <div class="row"> 
          <div class="col-12 mb-3">
              <a href="#addModal" type="button" class="btn btn-primary btn-lg float-end" data-toggle="modal"><i class="material-icons"></i> <span>Nova Especialidade</span></a>
              <p id="success"></p>
          </div>
        </div>
        <!-- TABLE -->
        <div class="col-12">
            <div class="card recent-sales">
              <div class="card-body">
              <h5 class="card-title">Especialidades no sistema</h5>
                <div class="row"> 
                  <div id="liveAlert" class="col-12 mb-3">

                  </div>
                </div>
                <table id="especialidade_table" class="table table-borderless "><!--datatable-->
                  <thead>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div><!-- End TABLE -->
        </div>
      </div>

    

      <!-- Add Modal HTML -->
      <div id="addModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="add_form">
              <div class="modal-header">
                <h4 class="modal-title">Nova Especialidade</h4>
                <button id="add-modal-btn-close" type="button" class="btn-close" data-dismiss="modal" aria-hidden="true"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Descrição</label>
                  <input type="text" id="descricao" name="descricao" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Utente</label>
                  <select id="id_utente" name="id_utente" class="form-select" aria-label="select utentes" required>
                    <option selected>Lista de utentes</option>
                  </select>
                  <!--<input type="text" id="id_utente" name="id_utente" class="form-control" required>-->
                </div>
                <div class="form-group">
                  <label>Medico</label>
                  <select id="id_medico" name="id_medico" class="form-select" aria-label="select medicos" required>
                    <option selected>Lista de médicos</option>
                  </select>
                  <!--<input type="text" id="id_medico" name="id_medico" class="form-control" required>-->
                </div>
                <div class="form-group">
                  <label>Data da consulta</label>
                  <input type="text" id="dataconsulta" name="dataconsulta" class="form-control" required>
                </div>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                <button type="submit" class="btn btn-primary" id="btn-add">Adicionar</button>
              </div>
            </form>
          </div>
        </div>
      </div>



      <!-- Update Modal HTML -->
      <div id="updateModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="update_form">
              <div class="modal-header">
                <h4 class="modal-title">Editar Especialidade</h4>
                <button id="update-modal-btn-close" type="button" class="btn-close" data-dismiss="modal" aria-hidden="true"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label>Descrição</label>
                    <input type="hidden" id="id" name="id" class="form-control">
                    <input type="text" id="descricao" name="descricao" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Utente</label>
                    <!--<select id="id_utente" name="id_utente" class="form-select" aria-label="Disabled select example" required>
                    <option selected>Open this select menu</option>
                  </select>-->
                    <input type="text" id="id_utente" name="id_utente" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Medico</label>
                    <!--<select id="id_medico" name="id_medico" class="form-select" aria-label="Disabled select example" required>
                    <option selected>Open this select menu</option>
                  </select>-->
                    <input type="text" id="id_medico" name="id_medico" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Data da consulta</label>
                    <input type="text" id="dataconsulta" name="dataconsulta" class="form-control" required>
                  </div>
                </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <button type="submit" class="btn btn-info" id="update">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>



      <!-- Delete Modal HTML -->
      <div id="deleteModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="delete_form">
              <div class="modal-header">
                <h4 class="modal-title">Apagar Especialidade?</h4>
                <button id="delete-modal-btn-close" type="button" class="btn-close" data-dismiss="modal" aria-hidden="true"></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="id" name="id" class="form-control">
                <p id="delete_form_message"></p>
                <p class="text-warning"><small>Depois de feito não pode voltar atráz.</small></p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <button type="submit" class="btn btn-danger" id="delete">Apagar</button>
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
       &copy; 2022 <strong><span>Consultas LDA</span></strong>
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

<!-- data-feather icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
<script> feather.replace(); </script>

<script>
  
</script>

</body>
</html>