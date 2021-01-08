<?php 

    $sql = $koneksi->query("select * from tb_user");
    $pengguna = $sql->num_rows;

    $sql2 = $koneksi->query("select * from tb_pelanggan");
    $pelanggan = $sql2->num_rows;

    $sql3 = $koneksi->query("select * from tb_laundry");
    $laundry = $sql3->num_rows;

    $sql4 = $koneksi->query("select * from tb_transaksi");
    $transaksi = $sql4->num_rows;

 ?>

<section class="content-header">
      <h1>
        Dashboard
        <small>Aplikasi Laundry</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $pengguna ?></h3>

              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="?page=pengguna" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $pelanggan ?><sup style="font-size: 20px"></sup></h3>

              <p>Pelanggan</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="?page=pelanggan" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $laundry ?></h3>

              <p>Transaksi Laundry</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="?page=laundry" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $transaksi ?></h3>

              <p>Laporan Keuangan</p>
            </div>
            <div class="icon">
              <i class="fa fa-balance-scale"></i>
            </div>
            <a href="?page=transaksi" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>