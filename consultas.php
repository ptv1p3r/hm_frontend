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
      <a href="" class="logo d-flex align-items-center">
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
              <a class="dropdown-item d-flex align-items-center" href="index.php">
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
        <a class="nav-link collapsed" href="principal.php">
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
          <i class="bi bi-person"></i>
          <span>Médicos</span>
        </a>
      </li><!-- End Médicos Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="especialidades.php">
          <i class="bi bi-activity"></i>
          <span>Especialidades</span>
        </a>
      </li><!-- End Especialidades Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  <div class="row mb-2 mb-xl-3">
  <div class="col-auto d-none d-sm-block">
    <h1>Consultas</h1>
  </div><!-- End Page Title -->

    <section class="section">
 
      <div class="container">
        <div class="row"> 
          <div class="col-12 mb-3">
              <a href="#addModal" type="button" class="btn btn-primary btn-lg float-end" data-toggle="modal"><i class="material-icons"></i> <span>Nova Consulta</span></a>
              <p id="success"></p>
          </div>
        </div>
        <!-- TABLE -->
        <div class="col-12">
            <div class="card recent-sales">
              <div class="card-body">
              <h5 class="card-title">Consultas no sistema</h5>
                <div class="row"> 
                  <div id="liveAlert" class="col-12 mb-3">

                  </div>
                </div>
                <table id="consultas_table" class="table table-borderless "><!--datatable-->
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
                <h4 class="modal-title">Criar Consulta</h4>
                <button id="add-modal-btn-close" type="button" class="btn-close" data-dismiss="modal" aria-hidden="true"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Descrição</label>
                  <input type="text" id="descricao" name="descricao" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Utente</label>
                  <select id="id_utente" name="id_utente" class="id_utente form-select" aria-label="select utentes" required>
                    <option disabled selected>Lista de utentes</option>
                  </select>
                  <!--<input type="text" id="id_utente" name="id_utente" class="form-control" required>-->
                </div>
                <div class="form-group">
                  <label>Medico</label>
                  <select id="id_medico" name="id_medico" class="id_medico form-select" aria-label="select medicos" required>
                    <option disabled selected>Lista de médicos</option>
                  </select>
                  <!--<input type="text" id="id_medico" name="id_medico" class="form-control" required>-->
                </div>
                <div class="form-group">
                  <label>Data da consulta</label>
                  <input type="text" id="dataconsulta" name="dataconsulta" class="form-control" placeholder="yyyy-mm-dd 00:00:00" required>
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
                <h4 class="modal-title">Editar Consulta</h4>
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
                    <select id="id_utente" name="id_utente" class="id_utente update_id_utente form-select" aria-label="select utentes" required>
                      <option disabled selected>Lista de utentes</option>
                    </select>
                    <!--<input type="text" id="id_utente" name="id_utente" class="form-control" required>-->
                  </div>
                  <div class="form-group">
                    <label>Medico</label>
                    <select id="id_medico" name="id_medico" class="id_medico update_id_medico form-select" aria-label="select medicos" required>
                      <option disabled selected>Lista de médicos</option>
                    </select>
                    <!--<input type="text" id="id_medico" name="id_medico" class="form-control" required>-->
                  </div>
                  <div class="form-group">
                    <label>Data da consulta</label>
                    <input type="text" id="dataconsulta" name="dataconsulta" class="form-control" placeholder="yyyy-mm-dd 00:00:00" required>
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
                <h4 class="modal-title">Apagar Consulta?</h4>
                <button id="delete-modal-btn-close" type="button" class="btn-close" data-dismiss="modal" aria-hidden="true"></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="id" name="id" class="form-control">
                <p id="delete_form_message"></p>
                <p class="text-warning"><small>Depois de feito não pode voltar atrás.</small></p>
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
  <script src="static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="static/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="static/vendor/tinymce/tinymce.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="static/js/main.js"></script>
  <script src="static/js/user.js"></script>


<script>
  $(document).ready(function() {

    //call func to ajax list
    ListConsultas();
    ListUtentes();
    ListMedicos();

    //CREATE
    $("#add_form").submit(function (event){
        event.preventDefault();
        var formData = {
            'action': 'addConsulta',
            'data': $(this).serializeArray()
        };
        console.log(formData)
        
        $.ajax({
            url: "<?php echo $path . "/toJson.php" ?>",
            dataType: 'json',
            type: 'POST',
            data: formData,
            success: function(response) {
              console.log('response ::', response );

              document.getElementById("add-modal-btn-close").click(); //simular modal close button press  
              ListConsultas();
              alert(JSON.parse(response).message,"info");
            }
        });
    });

    //UPDATE
    $("#update_form").submit(function (event){
        event.preventDefault();
        var formData = {
            'action': 'updateConsulta',
            'data': $(this).serializeArray()
        };
        console.log(formData)

        $.ajax({
            url: "<?php echo $path . "/toJson.php" ?>",
            dataType: 'json',
            type: 'POST',
            data: formData,
            success: function(response) {
              console.log('response ::', response );

              document.getElementById("update-modal-btn-close").click(); //simular modal close button press  
              ListConsultas();
              alert(JSON.parse(response).message,"info");
            }
        });
    });

    //DELETE
    $("#delete_form").submit(function (event){
        event.preventDefault();
        var formData = {
            'action': 'deleteConsulta',
            'data': $(this).serializeArray()
        };
        console.log(formData)

        $.ajax({
            url: "<?php echo $path . "/toJson.php" ?>",
            dataType: 'json',
            type: 'POST',
            data: formData,
            success: function(response) {
              console.log('response ::', response);
              
              document.getElementById("delete-modal-btn-close").click(); //simular modal close button press  
              ListConsultas();
              alert(JSON.parse(response).message,"info");
            }
        });
    });
});




//-- FUNCTIONS
//funçao AJAX para listar consultas
function ListConsultas(){
  $.ajax({
      url: "http://localhost:5000/v1/consultas/list",
      dataType: 'json',
      type: 'GET',
      success: function(data) {
          console.log('ListConsultas ::', data);

          var dataObject = [];
          for (var cons of data.data) {
            var temp = {id: "", Descricao: "", Utente: "", Medico: "", Especialidade: "", DataConsulta: ""};
            
            temp.id = cons.id;
            temp.Descricao = cons.descricao;
            getUtenteByIDToTable(cons.id_utente, function(output) {temp.Utente = output;});
            getMedicoByIDToTable(cons.id_medico, function(output) {
              temp.Medico = output.nome;
              getEspecialidadeByIDToTable(output.id_especialidade, function(output){ temp.Especialidade = output});
            });
            temp.DataConsulta = cons.dataconsulta;
            
            dataObject.push(temp);
          }
          console.log('ListConsultas built array ::', dataObject); 
          document.getElementById("consultas_table").innerHTML = genTable(dataObject);
      },
      error: function (err) {
        console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
        document.getElementById("consultas_table").innerHTML = ("AJAX error in request: " + JSON.stringify(err.responseJSON["message"], null, 2));
      }
  });
};

//funçao AJAX para listar medicos selectbox
function ListMedicos(){
  $.ajax({
      url: "http://localhost:5000/v1/medicos/list",
      dataType: 'json',
      type: 'GET',
      success: function(data) {
          console.log('ListMedicos ::', data);

          var dataObject = [];
          for (var med of data.data) {
            var temp = {id: "", Nome: ""};
            
            temp.id = med.id;
            temp.Nome = med.nome;

            dataObject.push(temp);
          }
          console.log('ListMedicos built array ::', dataObject); 
          
          var select = document.querySelectorAll(".id_medico");
          for (i = 0; i < select.length; i++) {
            for(index in dataObject) {
              select[i].options[select[i].options.length] = new Option(dataObject[index].Nome, dataObject[index].id);
            }
          }

          
      },
      error: function (err) {
        console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
      }
  });
};

//funçao AJAX para listar utentes selectbox
function ListUtentes(){
  $.ajax({
      url: "http://localhost:5000/v1/utentes/list",
      dataType: 'json',
      type: 'GET',
      success: function(data) {
          console.log('ListUtentes ::', data);

          var dataObject = [];
          for (var med of data.data) {
            var temp = {id: "", Nome: ""};
            
            temp.id = med.id;
            temp.Nome = med.nome;

            dataObject.push(temp);
          }
          console.log('ListUtentes built array ::', dataObject); 

          var select = document.querySelectorAll(".id_utente");
          for (i = 0; i < select.length; i++) {
            for(index in dataObject) {
              select[i].options[select[i].options.length] = new Option(dataObject[index].Nome, dataObject[index].id);
            }
          }
            
      },
      error: function (err) {
        console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
      }
  });
};

//funçao AJAX para get consulta by id
function getConsultaByID(id){
  $.ajax({
      url: "http://localhost:5000/v1/consultas/" + id,
      dataType: 'json',
      type: 'GET',
      success: function(data) {
          console.log('getMedicoByID ::', data);
          DataToModal(data.data);
      },
      error: function (err) {
        console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
      }
  });
};

//funcao delete consulta
function deleteConsultaByID(id){
  var Form = document.forms['delete_form'];
  Form.elements["id"].value = id;
  var consnome;
  getConsultaDescricao(id, function(output){ consnome = output })
  document.getElementById("delete_form_message").innerHTML = "Deseja apagar consulta '"+consnome+"' de nº"+ id;
};
//funçao AJAX para get consulta by id
function getConsultaDescricao(cons_id, handleData){
  $.ajax({
    url: "http://localhost:5000/v1/consultas/" + cons_id,
    dataType: 'json',
    type: 'GET',
    async: false,
    success: function(data) {
        console.log('getConsultaDescricao ::', data);
        handleData(data.data[0].descricao);
    },
    error: function (err) {
      console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
    }
  });
};

//funçao AJAX para get medico by id to table
function getMedicoByIDToTable(medico_id, handleData){
  $.ajax({
    url: "http://localhost:5000/v1/medicos/" + medico_id,
    dataType: 'json',
    type: 'GET',
    async: false,
    success: function(data) {
        console.log('getMedicoByIDToTable ::', data);
        handleData(data.data[0]);
    },
    error: function (err) {
      console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
    }
  });
};

//funçao AJAX para get utente by id to table
function getUtenteByIDToTable(utente_id, handleData){
  $.ajax({
    url: "http://localhost:5000/v1/utentes/" + utente_id,
    dataType: 'json',
    type: 'GET',
    async: false,
    success: function(data) {
        console.log('getUtenteByIDToTable ::', data);
        handleData(data.data[0].nome);
    },
    error: function (err) {
      console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
    }
  });
};

//funçao AJAX para get especialidade by id to table
function getEspecialidadeByIDToTable(esp_id, handleData){
  $.ajax({
    url: "http://localhost:5000/v1/especialidades/" + esp_id,
    dataType: 'json',
    type: 'GET',
    async: false,
    success: function(data) {
        console.log('getEspecialidadeByIDToTable ::', data);
        handleData(data.data[0].nome);
    },
    error: function (err) {
      console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
    }
  });
};

//funcao generateTable consulta
function genTable(data){
  var keys = Object.keys(data[0]);
  console.log(data);
  return `<table>
            <thead>
              ${keys.map(i=>`<th scope="col-s-auto">${i}</th>`).join('')}<th>Editar</th><th>Apagar</th>
            </thead>
            <tbody>
              ${data.map(i=>`<tr>${keys.map(k => `<td>${i[k]}</td>`).join('')}<td><button id="tbl_btn_update" onclick="getConsultaByID(${i.id})" type="button" class="btn btn-warning" href="#updateModal" data-toggle="modal" "><i class="bi bi-pencil-square"></i></button></td> <td><button type="button" class="btn btn-danger" href="#deleteModal" data-toggle="modal" onclick="deleteConsultaByID(${i.id})"><i class="bi bi-trash"></i></button></td>`).join('')}
            </tbody>
          </table>`;
};

//funcao mostra dados da consulta no modal update
function DataToModal(data) {
  console.log('DataToModal ::', data);
  var Form = document.forms['update_form'];
  Form.elements["id"].value = data[0].id;
  Form.elements["descricao"].value = data[0].descricao;

  $(".update_id_utente").val(data[0].id_utente);
  $(".update_id_medico").val(data[0].id_medico);

  Form.elements["dataconsulta"].value = data[0].dataconsulta;
};


//mensagem alerta para CRUD
var alertPlaceholder = document.getElementById('liveAlert')
function alert(content, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + content + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" role="alert"></button></div>'

  alertPlaceholder.append(wrapper)
  
  // timeout alert message
  setTimeout(function () {
    $(".alert").remove()
  }, 3000);
}


</script>

</body>
</html>