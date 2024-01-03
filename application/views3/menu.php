<?php
$Dd = date("D");
$bln = date("M");
if ($Dd == "Sun") {
  $hari = "Minggu, ";
} else if ($Dd == "Mon") {
  $hari = "Senin, ";
} else if ($Dd == "Tue") {
  $hari = "Selasa, ";
} else if ($Dd == "Wed") {
  $hari = "Rabu, ";
} else if ($Dd == "Thu") {
  $hari = "Kamis, ";
} else if ($Dd == "Fri") {
  $hari = "Jum'at, ";
} else if ($Dd == "Sat") {
  $hari = "Sabtu, ";
} else {
  $hari = $Dd;
}

if ($bln == 'Jan') {
  $bln = "Januari ";
} elseif ($bln == 'Feb') {
  $bln = "Februari ";
} elseif ($bln == 'Mar') {
  $bln = "Maret ";
} elseif ($bln == 'Apr') {
  $bln = "April";
} elseif ($bln == 'May') {
  $bln = "Mei ";
} elseif ($bln == 'Jun') {
  $bln = "Juni ";
} elseif ($bln == 'Jul') {
  $bln = "Juli ";
} elseif ($bln == 'Aug') {
  $bln = "Agustus ";
} elseif ($bln == 'Sep') {
  $bln = "September ";
} elseif ($bln == 'Oct') {
  $bln = "Oktober ";
} elseif ($bln == 'Nov') {
  $bln = "November";
} elseif ($bln == 'Dec') {
  $bln = "Desember ";
} else {
  $bln = $bln;
}
$sekolah = $this->db->query("SELECT * FROM mst_sekolah WHERE id = 1")->row();
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-info elevation-4 fadeInLeft" style="background-color: #2D5E89;">
  <!-- Brand Logo -->
    
    <a href="<?php echo base_url(); ?>" class="brand-link " style="background-color: #2D5E89;">
      <center><img class="profile-user-img img-fluid img-circle" src="https://demo.proschool.id/assets/upload/profile/thumbnails/83e398aab8318b18d3d911ba8c29b6b8.png" style="margin : 50px; height : 100px;" alt="User profile picture"></center>
    <!-- <center><img class="profile-user-img img-fluid img-circle" src="http://localhost/proschoolfix/assets/upload/profile/thumbnails/c9a6e71312ee2657d24db228d5f76331.png" alt="User profile picture"></center> -->
     <!-- <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/upload/'.$sekolah->logo; ?>" alt="Logo" class="brand-image img-circle elevation-3" style="background-color :white;"> -->
      <!-- <span class="brand-text-shadow" style="text-shadow: 2px 2px 4px #827e7e"><b><font color='white'><center>KESISWAAN</b></span></font></center> -->
    </a>
    <div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!--<img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/upload/'.$sekolah->logo; ?>" alt="Logo" class="brand-image img-rounded elevation-3" style="opacity: .8">-->
      <!-- <span class="brand-text font-weight-light" style="text-shadow: 2px 2px 4px #827e7e;"><center><b><strong><font color='white'>PERPUSTAKAAN</b></span></font></strong></center> -->
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
        <?php if($this->session->userdata("hak_akses") == 'guru' || $this->session->userdata("hak_akses") == 'gurubk') { 
          $id = $this->session->userdata("id");
          $get_foto = $this->db->query("SELECT foto FROM mst_guru WHERE id_guru = '$id'")->row();
          ?>
           <!-- <div class="image">
          <img src="http://localhost/proschoolfix/assets/upload/administrator/thumbnails/dd4d449e8a97cc6a4e3cbcedf13c7197.jpeg" class="img-circle elevation-2" alt="User Image" height="40px">
        </div> -->
        <!-- <div class="image">
         <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/akademik/upload/guru/' . $get_foto->foto; ?>" class="img-rounded elevation-2" style="width:60px;height:60px;" alt="User Image">
        </div> -->
         <?php } else { ?>
         <!-- <div class="image animated fadeInLeft"> -->
          <!-- <img src="http://localhost/proschoolfix/assets/upload/administrator/thumbnails/dd4d449e8a97cc6a4e3cbcedf13c7197.jpeg" class="img-circle elevation-2" alt="User Image" height="40px"> -->
         <!-- <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/upload/user.png'; ?>" class="img-circle elevation-3" style="width:60px;height:70px;" alt="Foto Admin"> -->
        <!-- </div> -->
        <?php } ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <img src="https://demo.proschool.id/assets/upload/administrator/thumbnails/3454bd5004b1bd6d20a9ff3f633a37d1.png" class="img-circle elevation-2" alt="User Image">
        </div>
          <div class="pull-left info">
          <a href="#" class="d-block"><font color='white'><?php echo $this->session->userdata("nama"); ?></a></font>
          <!-- <span class="badge badge-info right bg-navy"><?php echo ucfirst($this->session->userdata("hak_akses")); ?></span> -->
          <!-- <a href="<?php echo base_url(); ?>logout"><span class="badge badge-warning right ">Logout <i class="nav-icon fas fa-sign-out-alt"></i></span></a> -->
          </div>
        </div>
        <!-- <div class="info"> -->
        <!-- <a href="#" class="d-block"><font color='white'><?php echo $this->session->userdata("nama"); ?></a></font>
         <span class="badge badge-info right bg-navy "><?php echo ucfirst($this->session->userdata("hak_akses")); ?></span> -->
         <!-- <a href="<?php echo base_url(); ?>logout"><span class="badge badge-danger right ">Logout <i class="nav-icon fas fa-sign-out-alt"></i></span></a> -->
        <!-- </div>
        <br> -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <!-- <li class="nav-header"><strong>
            <font color='white'>DATA MANAJEMEN</li>
        </font></strong> -->
        <?php if ($this->session->userdata("level") == 'admin_group') { ?>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>home" class="nav-link active bg-navy">
              <i class="nav-icon fas fa-th"></i>
              <p>
                <strong>
                  <font color='white'>Beranda
              </p>
            </a></font></strong>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>konfirmasi" class="nav-link">
              <i class="nav-icon fas fa-user-ninja text-white"></i>
              <p>
                <font color='white'>Konfirmasi Pendaftaran
              </p>
            </a></font>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>laporan/alumni" class="nav-link">
              <i class="nav-icon far fa-address-card text-white"></i>
              <p>
                <font color='white'>Daftar Alumni
              </p>
            </a></font>
            <!-- </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>loker" class="nav-link">
              <i class="nav-icon fas fa-people-carry text-info"></i>
              <p>
                <font color='white'>Data Lowongan Kerja
              </p>
            </a></font>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>pengumuman" class="nav-link">
              <i class="nav-icon fal fa-hospital-user text-info"></i>
              <p>
                <font color='white'>Data Pengumuman
              </p>
            </a></font>
          </li> -->
            <!-- <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>laporan/laporan_alumni" class="nav-link">
              <i class="nav-icon fal fa-file-user text-info"></i>
              <p>
                <font color='white'>Laporan Data Alumni
              </p>
            </a></font>
          </li> -->
          <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'master') echo 'active'; ?> treeview <?php if ($this->uri->segment(1) == 'user') echo 'menu-open'; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fal fa-file-user text-white"></i>
              <p>
                <font color='white'>LAPORAN
                  <i class="fas fa-angle-right"></i>
                </font>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <!-- "<?php echo base_url(); ?>laporan/laporan_alumni" -->
                <a href="#" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-white"></i>
                  <p>
                    <font color='white'> Kelulusan
                  </p>
                </a>
              </li>
              </font>
            </ul>
          </li>

          <!-- <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>app/password" class="nav-link">
              <i class="nav-icon fas fa-lock text-info"></i>
              <p>
                <font color='white'>Ubah Password
              </p>
            </a></font>
          </li> -->

          <!--<li class="nav-item has-treeview">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-book text-purple"></i>-->
          <!--    <p>-->
          <!--      Manual Book-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->

          

        <?php } else { ?>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>app/biodata" class="nav-link">
              <i class="nav-icon fas fa-id-card text-white"></i>
              <p>
                <font color='white'>Biodata
              </p>
            </a></font>
          </li>
           <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>konfirmasi" class="nav-link">
              <i class="nav-icon fas fa-user-ninja text-white"></i>
              <p>
                <font color='white'>Konfirmasi Pendaftaran
              </p>
            </a></font>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>loker/loker_daftar" class="nav-link">
              <i class="nav-icon fal fa-hospital-user text-white"></i>
              <p>
                <font color='white'>Informasi Lowongan Kerja
              </p>
            </a></font>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>pengumuman/pengumuman_daftar" class="nav-link">
              <i class="nav-icon fal fa-hospital-user text-white"></i>
              <p>
                <font color='white'>Informasi Pengumuman
              </p>
            </a></font>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>app/password" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                <font color='white'>Ubah Password
              </p>
            </a></font>
          </li>

          <!--<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book text-success"></i>
              <p>
                Manual Book
              </p>
            </a>
          </li>-->
          
      </ul>
    <?php } ?>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<script type="text/javascript">
  function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();
    if (curr_hour < 12) {
      a_p = "AM";
    } else {
      a_p = "PM";
    }
    if (curr_hour == 0) {
      curr_hour = 12;
    }
    if (curr_hour > 12) {
      curr_hour = curr_hour - 12;
    }
    curr_hour = checkTime(curr_hour);
    curr_minute = checkTime(curr_minute);
    curr_second = checkTime(curr_second);
    document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
  }

  function checkTime(i) {
    if (i < 10) {
      i = "0" + i;
    }
    return i;
  }
  setInterval(showTime, 500);
  //-->
</script>