<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<!--  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">    -->

  <!-- Favicons -->
  <link href="static/img/favicon.png" rel="icon">
  <link href="static/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="static/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="static/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="static/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="static/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="static/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="static/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php session_start(); /* Starts the session */
/* Check Login form submitted */
if(isset($_POST['submit'])){
/* Define username and associated password array */
$logins = array('admin' => 'admin');

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:principal.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */
$msg="<span style='color:red'>Login invalido</span>";
}
}
?>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Inicio de sessão</h5>
                    <p class="text-center small">Insira o seu username e password</p>
                  </div>
                  <form class="row g-3 needs-validation" method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <!--<span class="input-group-text" id="inputGroupPrepend">@</span>  -->
                        <input type="text" name="Username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Por favor insira o username!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="Password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Por favor insira a password!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>
              <!-- ======= Footer ======= -->
              <footer id="footer a" class="footer">
                <div class="copyright">
                  &copy; 2022 <strong><span>Consultas LDA</span></strong>
                </div>
              </footer><!-- End Footer -->
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="static/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="static/vendor/chart.js/chart.min.js"></script>
  <script src="static/vendor/echarts/echarts.min.js"></script>
  <script src="static/vendor/quill/quill.min.js"></script>
  <script src="static/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="static/vendor/tinymce/tinymce.min.js"></script>
  <script src="static/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="static/js/main.js"></script>

</body>

</html>