<?php
$tahun_ajaran = $this->db->query("SELECT tahun_ajaran, semester FROM mst_tahun_ajaran WHERE aktif_tahun_ajaran = 1")->row();
$sekolah = $this->db->query("SELECT * FROM mst_sekolah WHERE id = 1")->row();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ProSchool | SIM Sekolah</title>

  <link rel="shortcut icon" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/upload/'.$sekolah->logo; ?>" type="image/x-icon">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Animate -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/animate.css-master/animate.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Font Awesome Pro -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/toastr/build/toastr.min.css" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Theme style -->

  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="<?php echo base_url(); ?>node_modules/toastr/build/toastr.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
 
  
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed ">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-purple navbar-light" style="background-color: white;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>app/registrasi" target="_blank"> <i class="fas fa-spin fa-globe text-navy"></i></a>
        </li>
        <li class="nav-item">
          <span class="" style="font-size:25px;">ALUMNI</span></a>
        </li>
      </ul>
      <ul class="animated fadeInDown navbar-nav ml-auto">
      <div class="btn-group btn-group-sm">
                    <span class="btn bg-red icon text-white-50">
                      <i class="fas fa-calendar-alt text-white"></i>
                    </span>
                    <span class="btn bg-warning brand-text font-weight-light text-white text-uppercase"><b>TA : <?php echo $tahun_ajaran->tahun_ajaran.' | Semester '.$tahun_ajaran->semester; ?></b></span>
                  <button  class="btn bg-navy btn-icon-split" onclick="goBack()">
                    <span class="icon text-white-50">
                      <i class="nav-icon fas fa-sign-out-alt text-white"></i>
                    </span>
                    <span class="brand-text font-weight-light text-white text-uppercase"><b>Kembali</b></span>
                  </button>
      </div>
    </ul>

    </nav>
    <!-- /.navbar -->
<script>
    function goBack() {
    window.location.href = "https://demo.proschool.prodoc.id/administrator/dashboard";
    }
</script>
    <!-- /.navbar -->