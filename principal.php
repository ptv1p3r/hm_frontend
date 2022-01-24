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
        <a class="nav-link" href="index.php">
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
    <h1>Pagina principal</h1>
  </div><!-- End Page Title -->

    <section class="section">
 
      <div class="container" style="margin-left:270px;">
        <div class="row"> 
        <div class="col-12 mb-3" style ="visibility:hidden;">
              <a href="#" type="button" class="btn btn-primary btn-lg float-end" data-toggle="modal"><i class="material-icons"></i></a>
              <p id="success"></p>
                </div>
        </div>
        <!-- TABLE -->
        <div class="col-7">
            <div class="card recent-sales">
              <div class="card-body">
              <h5 class="card-title">Frases do dia</h5>
                <div class="row"> 
                  <div id="liveAlert" class="col-12 mb-3">

                  </div>
                </div>
                <div id="textodia"> </div>
                <br>
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
                    <option selected>Lista de utentes</option>
                  </select>
                  <!--<input type="text" id="id_utente" name="id_utente" class="form-control" required>-->
                </div>
                <div class="form-group">
                  <label>Medico</label>
                  <select id="id_medico" name="id_medico" class="id_medico form-select" aria-label="select medicos" required>
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
                      <option selected>Lista de utentes</option>
                    </select>
                    <!--<input type="text" id="id_utente" name="id_utente" class="form-control" required>-->
                  </div>
                  <div class="form-group">
                    <label>Medico</label>
                    <select id="id_medico" name="id_medico" class="id_medico update_id_medico form-select" aria-label="select medicos" required>
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


<script>

frases = [{"Mario Quintana" : "Existe um momento na vida de cada pessoa que é possível sonhar e realizar nossos sonhos… e esse momento tão fugaz chama-se presente e tem a duração do tempo que passa."},
{"Albert Einsten" : "O único lugar onde sucesso vem antes do trabalho é no dicionário."},
{"Mary Kay Ash" : "Um sonho é apenas um desejo, até o momento em que você começa a atuar sobre ele, e propõe-se a transformá-lo em uma meta."},
{"Guilherme Ávila" : "Coloque seu coração, mente e alma até mesmo nas menores coisas que você fizer. Esse é o segredo para o sucesso."},
{"Epicteto" : "Sucesso é encontrar aquilo que se tenciona ser e depois fazer o que é necessário para isso."},
{"José de Alencar" : "O sucesso nasce do querer, da determinação e persistência em se chegar a um objetivo. Mesmo não atingindo o alvo, quem busca e vence obstáculos, no mínimo fará coisas admiráveis."},
{"Max Weber" : "O homem não teria alcançado o possível se, repetidas vezes, não tivesse tentado o impossível."},
{"Dalai Lama" : "Determinação, coragem e autoconfiança são fatores decisivos para o sucesso. Se estamos possuídos por uma inabalável determinação, conseguiremos superá-los. Independentemente das circunstâncias, devemos ser sempre humildes, recatados e despidos de orgulho."},
{"Martin Luther King" : "Suba o primeiro degrau com fé. Não é necessário que você veja toda a escada. Apenas dê o primeiro passo."},
{"Mark Twain" : "Ter uma melhora constante é melhor do que a perfeição adiada."},
{"Mark Zuckerberg" : "Acredito que uma regra simples do mundo dos negócios é: se você faz as coisas mais fáceis primeiro, então você pode de fato ter um grande progresso."},
{"Azim Premji" : "O sucesso é atingido duas vezes: a primeira na mente e a segunda no mundo real."},
{"Ellen Johnson Sirleaf" : "Se os teus sonhos não te assustam, eles não são grandes o suficiente."},
{"Winston Churchill" : "O sucesso é ir de fracasso em fracasso sem perder o entusiasmo."},
{"Steve Jobs" : "Vamos inventar o amanhã e parar de nos preocupar com o passado."},
{"Charles Chaplin" : "A persistência é o caminho do êxito."},
{"Sigmund Freud" : "Somos feitos de carne, mas temos de viver como se fôssemos de ferro."},
{"Rosa Parks" : "Você nunca deve ter medo do que está fazendo quando está certo."},
{"Lin Yutang" : "Além da nobre arte de fazer coisas, existe a nobre arte de deixar coisas sem fazer. A sabedoria da vida consiste na eliminação do que não é essencial."},
{"Margaret Thatcher" : "Gostaria que você soubesse que existe dentro de si uma força capaz de mudar sua vida, basta que lute e aguarde um novo amanhecer."},
{"Sabedoria Persa" : "Não ergas alto um edifício sem fortes alicerces, se o fizeres viverás com medo."},
{"Cícero" : "Não basta adquirir sabedoria; é preciso, além disso, saber utilizá-la."},
{"Cora Coralina" : "O saber se aprende com os mestres. A sabedoria, só com o corriqueiro da vida."},
{"Kamal Ravikant" : "A vida é de dentro para fora. Quando você muda por dentro, a vida muda por fora."},
{"Joseph Campbell" : "Precisamos estar dispostos a nos livrar da vida que planejamos, para podermos viver a vida que nos espera. A pele velha tem que cair para que uma nova possa nascer."}]



// Create array of object keys, ["311", "310", ...]
const keys = Object.keys(frases)

// Generate random index based on number of keys
const randIndex = Math.floor(Math.random() * keys.length)

// Select a key from the array of keys using the random index
const randKey = keys[randIndex]

// Use the key to get the corresponding name from the "names" object
const name = frases[randKey]

document.querySelector("#textodia").innerHTML = Object.keys(name) +":" +"<br>" + "<em>"+ "<br>" + '"' + Object.values(name) + '"'


</script>

</body>
</html>