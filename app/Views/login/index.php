<?php 
use App\Models\Konfigurasi_model;
$konfigurasi  = new Konfigurasi_model;
$site         = $konfigurasi->listing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title ?></title>
  <meta content="<?php echo $description ?>" name="description">
  <meta content="<?php echo $keywords ?>" name="keywords">
  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/assets/upload/image/SCTC/Logo.png" rel="icon">
  <link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- jQuery -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/dist/css/adminlte.min.css">
<!-- SWEETALERT -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition login-page" style="background-color: #2596be;">
<div class="login-box" style="min-width: 35% !important; ">
  

<!-- /.login-box -->

<script>
<?php if($session->getFlashdata('sukses')) { ?>
// Notifikasi
swal ( "Berhasil" ,  "<?php echo $session->getFlashdata('sukses'); ?>" ,  "success" )
<?php } ?>

<?php if(isset($_GET['logout'])) { ?>
// Notifikasi
swal ( "Berhasil" ,  "Anda berhasil logout." ,  "success" )
<?php } ?>

<?php if(isset($_GET['login'])) { ?>
// Notifikasi
swal ( "Oops..." ,  "Anda belum login." ,  "warning" )
<?php } ?>

<?php if($session->getFlashdata('warning')) { ?>
// Notifikasi
swal ( "Mohon maaf" ,  "<?php echo $session->getFlashdata('warning'); ?>" ,  "warning" )
<?php } ?>

</script>


<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>/assets/admin/dist/js/adminlte.min.js"></script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V1</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/upload/image/SCTC/Logo.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
   <?php echo '<span class="text-danger">'.\Config\Services::validation()->listErrors().'</span>'; ?>
<?php 

 echo form_open(base_url('login')); ?>
      <?= csrf_field() ?>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt style="margin-left: 210px;">
          <img src="<?php echo base_url() ?>/assets/upload/image/SCTC/Logo.png" alt="IMG">
        </div>

        <form class="login100-form validate-form">
          <span class="login100-form-title">
         
          </span> <h2 style="margin-left: 230px; margin-bottom:50px;"> <b>SCTC LIVING LAB </b></h2>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="username" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Masuk
            </button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" id="remember">
              Username / Password?
            </a>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="#">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
        <?php echo form_close(); ?>

  
<!--===============================================================================================-->  
  <script src="<?php echo base_url() ?>/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>/assets/login/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url() ?>/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>/assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>/assets/login/vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>/assets/login/js/main.js"></script>

</body>
</html>
