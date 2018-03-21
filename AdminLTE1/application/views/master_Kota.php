	<!-- Side Bar -->
 <aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
      <li><a href="<?php echo base_url('penduduk/dashboardPenduduk') ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li><a href="<?php echo base_url('penduduk/showAll') ?>"><i class="glyphicon glyphicon-list"></i> <span>Data Penduduk</span></a></li>
      <li><a href="<?php echo base_url('penduduk/tambahPenduduk') ?>"><i class="glyphicon glyphicon-plus"></i> <span>Tambah Penduduk</span></a></li>
      <li class="header">Menu Sekunder</li>
      <li class="treeview active">
        <a href="#"><i class="fa fa-link"></i> <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Kota</a></li>
          <li><a href="<?php echo base_url('data/surat') ?>"><i class="fa fa-circle-o"></i>Surat Keterangan Domisili</a></li>
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
      Master Data - Kota
      <small>Menu Sekunder</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('penduduk/showAll') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Kota</li>
    </ol>
  </section>

  <!-- START Naronya Disini!!! -->

  <!-- Main content -->
  <section class="content">

    <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-8">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Data Kota</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="">
            <table id="dataPendudukAll" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                 <th>No</th>
                 <th>Nama Kota</th>
                 <th>Aksi</th>
               </tr>
             </thead>
             <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Kota</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
              $num = 1; 
              foreach ($kota as $key) { ?>
              <tr>
                <td><?php echo $num ++ ?></td>
                <td><?php echo $key->nama_kota ?></td>
                <td><div style="width: 100px;"><a href="javascript::(0);" onclick="viewDataKota(<?php echo $key->id ?>)" class="btn btn-xs btn-warning btn-datatables" data-toggle="modal" data-target="#modal-edit-kota"><li class="glyphicon glyphicon-pencil"></li> Edit</a><a href="<?php echo base_url('data/kota/delete/'.$key->id) ?>" onclick="confirm('Yakin ingin menghapus data?')" class="btn btn-xs btn-danger btn-datatables"><li class="glyphicon glyphicon-trash"></li></a></div></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <div class="col-md-4">
      <div class="box box-primary box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Pilihan</h3>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="">
          <button class="btn btn-success col-md-12" data-toggle="modal" data-target="#modal-default"><li class="glyphicon glyphicon-plus"></li> Tambah Data</button>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

  <!-- Modal Tambah Data -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-light-blue disabled color-palette">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Data Kota</h4>
          </div>
          <form onsubmit="confirm('Buat Data?')" action="<?php echo base_url('data/kota/tambah') ?>" class="col-12" method="post">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <label for="nama_kota">Nama Kota</label>
                  <input type="text" class="form-control" id="nama_kota" name="nama_kota" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Edit Data -->
    <div class="modal fade" id="modal-edit-kota">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-light-blue disabled color-palette">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Data Kota</h4>
            </div>
            <form onsubmit="confirm('Update Data?')" action="<?php echo base_url('data/kota/update') ?>" class="col-12" method="post">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <label for="nama_kota">Nama Kota</label>
                    <input type="hidden" class="form-control" id="id_edit_kota" name="id_edit_kota" required>
                    <input type="text" class="form-control" id="nama_edit_kota" name="nama_edit_kota" required>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

	<!-- END Naronya Disini!!! -->