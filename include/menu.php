<?php  

    include "include/koneksi.php";

    session_start();

    if ($_SESSION['admin'] || $_SESSION['kasir']) {

      
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/<?php echo $data_user['foto'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> 

      <br>

      <?php 

          if ($_SESSION['admin']) {
            $user = $_SESSION['admin'];
          }elseif ($_SESSION['kasir']) {
            $user = $_SESSION['kasir'];
          }

          $sql_user = $koneksi->query("select * from tb_user where id='$user'");
          $data_user = $sql_user->fetch_assoc();

          $nama = $data_user['nama'];
          $level = $data_user['level'];

       ?>
       
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="text-align: center"><b>MENU</b></li>
        
            <?php if ($_SESSION['admin']){ ?>
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="?page=pengguna"><i class="fa fa-user"></i> Pengguna</a></li>
            <li><a href="?page=pelanggan"><i class="fa fa-group"></i> Pelanggan</a></li>
            <?php } ?>
            <li><a href="?page=laundry"><i class="fa fa-money"></i> Transaksi Laundry</a></li>
            <?php if ($_SESSION['admin']){ ?>
            <li><a href="?page=transaksi"><i class="fa fa-money"></i> Laporan Keuangan </a></li>
            <?php } ?>            

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  
  <?php 

     }else{

      header("location:login.php");

     }

 ?>