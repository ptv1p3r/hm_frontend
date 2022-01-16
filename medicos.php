
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
        <a class="nav-link" href="medicos.php">
          <i class="bi bi-activity"></i>
          <span>Médicos</span>
        </a>
      </li><!-- End Médicos Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  <div class="row mb-2 mb-xl-3">
  <div class="col-auto d-none d-sm-block">
    <h1>Médicos</h1>
  </div><!-- End Page Title -->

    <section class="section">
 
      <div class="container">
      <div class="row"> 
      <div class="col-12 mb-3">
          <a href="#addEmployeeModal" type="button" class="btn btn-primary btn-lg float-end" data-toggle="modal"><i class="material-icons"></i> <span>Adicionar Médico</span></a>
          <p id="success"></p>
            </div>
      </div>

   
        <!-- Recent medical appointments -->
        <div class="col-12">
          <div class="card recent-sales">
            <div class="card-body">
            <h5 id="TEST-AJAX" class="card-title">Médicos no sistema</h5>
              <div id="test_table">

              </div>
              <!--<table id="test_table" class="table table-borderless datatable">
                  <tr>
                    <th scope="col-s-auto">Nome</th>
                    <th scope="col-s-auto">Morada</th>
                    <th scope="col-s-auto">CodPostal</th>
                    <th scope="col-s-auto">Email</th>
                    <th scope="col-s-auto">Nif</th> 
                    <th scope="col-s-auto">C.Profissional</th>
                    <th scope="col-s-auto">Telemovel</th>
                    <th scope="col-s-auto">DataNascimento</th>
                  </tr>
                    <tbody>
                    </tbody>
                  </tr>
              </table>-->
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
                <h4 class="modal-title">Adicionar Médico</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Morada</label>
                  <input type="text" id="address" name="address" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>CodPostal</label>
                  <input type="text" id="codpostal" name="codpostal" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Nif</label>
                  <input type="text" id="nif" name="nif" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>C.Profissional</label>
                  <input type="text" id="cprofissional" name="cprofissional" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Telemóvel</label>
                  <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>DataNascimento</label>
                  <input type="text" id="datanascimento" name="datanascimento" class="form-control" required>
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
                <button type="submit" class="btn btn-info" id="update">Update</button>
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
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="id_d" name="id" class="form-control">
                <p>Are you sure you want to delete these Records?</p>
                <p class="text-warning"><small>This action cannot be undone.</small></p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <button type="submit" class="btn btn-danger" id="delete">Delete</button>
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
  <!--<script src="static/js/medicos.js"></script>-->


<!-- data-feather icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
<script>feather.replace()</script>

<script>
  $(document).ready(function() {
    //CREATE medico
    $("#user_form").submit(function (event){
        event.preventDefault();
        var formData = {
            'action': 'addMedico',
            'data': $(this).serializeArray()
        };
        console.log(formData)
        
        $.ajax({
            url: "<?php echo $path . "/toJson.php" ?>",
            dataType: 'json',
            type: 'POST',
            data: formData,
            success: function(response) {
                console.log('response tua ::', response );
            }
        });
    });

    //AJAX para mostrar dados on document ready
    $.ajax({
        url: "http://localhost:5000/v1/medicos/list",
        dataType: 'json',
        type: 'GET',
        success: function(data) {
            console.log(data);

            var dataObject = [];
            for (var med of data.data) {
              var temp = { id: "", Nome: "", Morada: "", CodPostal: "", Email: "", Nif: "", DataNascimento: "", Datecreate: "", Datemodify: ""};

              temp.id = med.id; 
              temp.Nome = med.nome;
              temp.Morada = med.morada;
              temp.CodPostal = med.codpost;
              temp.Email = med.email;
              temp.Nif = med.nif;
              temp.DataNascimento = med.datanascimento;
              temp.Datecreate = med.datecreate;
              temp.Datemodify = med.datemodify;

              dataObject.push(temp);
            }
            console.log(dataObject);
            document.getElementById("test_table").innerHTML = generateTable(dataObject); 
        }
    });

    //funcao generateTable medicos
    function generateTable(tblArray){
      var keys = Object.keys(tblArray[0]);
        var mytable = `<table class="table table-borderless datatable">`;
        mytable += "<tr>" 
        for (var key of keys) {
          mytable += `<th scope="col-s-auto">` + key + "</th>"; 
        }
        mytable += "</tr>"
        for (var CELL of tblArray) {
          mytable += "<tr>"  
          mytable += `<td>` + CELL.id + "</td>"; 
          mytable += `<td>` + CELL.Nome + "</td>";
          mytable += `<td>` + CELL.Morada + "</td>";
          mytable += `<td>` + CELL.CodPostal + "</td>";
          mytable += `<td>` + CELL.Email + "</td>";
          mytable += `<td>` + CELL.Nif + "</td>";
          mytable += `<td>` + CELL.DataNascimento + "</td>";
          mytable += `<td>` + CELL.Datecreate + "</td>";
          mytable += `<td>` + CELL.Datemodify + "</td>";
          mytable += "</tr>" 
        }
        mytable += "</table>";

        return mytable;
    }
});
</script>
</body>

</html>