	<!-- Side Bar -->
 <aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu Utama</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="<?php echo base_url('penduduk/dashboardPenduduk') ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li><a href="<?php echo base_url('penduduk/showAll') ?>"><i class="glyphicon glyphicon-list"></i> <span>Data Penduduk</span></a></li>
      <li><a href="<?php echo base_url('penduduk/tambahPenduduk') ?>"><i class="glyphicon glyphicon-plus"></i> <span>Tambah Penduduk</span></a></li>
      <li class="header">Menu Sekunder</li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('data/kota') ?>"><i class="fa fa-circle-o"></i>Kota</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Penduduk
      <small>Menu Utama</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Penduduk</li>
    </ol>
  </section>

  <!-- START Naronya Disini!!! -->

  <!-- Main content -->
  <section class="content">

    <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-3">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $penduduk['jumlah_data'] ?></h3>

            <p>Jumlah Data Penduduk</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo base_url() ?>/penduduk/showAll" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- chart dashboard Jenis Kelamin -->
      <div class="col-md-6">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Perbandingan Jumlah Penduduk Berdasarkan Jenis Kelamin</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="chart" id="jk-chart" style="height: 300px; position: relative;"></div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->        
      </div>
      <!-- chart dashboard Kota -->
      <div class="col-md-6">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Perbandingan Jumlah Penduduk Berdasarkan Tempat Lahir</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="chart" id="kota-chart" style="height: 300px; position: relative;"></div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->        
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

	<!-- END Naronya Disini!!! -->