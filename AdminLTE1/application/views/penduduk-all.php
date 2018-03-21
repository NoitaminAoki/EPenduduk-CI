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
      <li><a href="<?php echo base_url('penduduk/dashboardPenduduk') ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li class="active"><a href="<?php echo base_url('penduduk/showAll') ?>"><i class="glyphicon glyphicon-list"></i> <span>Data Penduduk</span></a></li>
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
      <div class="col-md-12">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Data Penduduk</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive" style="">
            <table id="dataPendudukAll" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                 <th id="thku">Nik</th>
                 <th>Nama</th>
                 <th>Tempat Lahir</th>
                 <th>Tanggal Lahir</th>
                 <th>Alamat</th>
                 <th>Foto</th>
                 <th>Aksi</th>
               </tr>
             </thead>
             <tfoot>
              <tr>
                <th>Nik</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              $url_baseImg = "./../assets/images/";
              foreach($penduduk as $key) {?>
                <tr>
                  <td contenteditable="true"><?php echo $key->nik ?></td>
                  <td><?php echo $key->nama ?></td>
                  <td><?php echo $key->tempat_lahir ?></td>
                  <td><?php echo $key->tanggal_lahir ?></td>
                  <td><?php echo $key->alamat ?></td>
                  <td><img onclick="clickImage()" class="materialboxed" src="<?php echo $url_baseImg.$key->foto_ktp ?>" alt="Foto KTP" width="70"></td>
                  <td>
                    <div style="width: 150px;">
                    <button type="button" class="btn btn-primary btn-xs" style="margin:1.5px;" onclick="viewDataPenduduk(<?php echo $key->nik ?>)" data-toggle="modal" data-target="#myModal"><li class="fa fa-eye"></li>&nbsp;view</button>
                    <a href="<?php base_url() ?>editPenduduk/<?php echo $key->nik ?>" class="btn btn-warning btn-xs" style="margin:1.5px;"><li class="glyphicon glyphicon-pencil"></li>&nbsp;Edit</a>
                    <a style="margin:1.5px;" onclick="return confirm('Yakin ingin menghapus data dengan nik '+<?php echo $key->nik ?>)" href="<?php base_url() ?>deletePenduduk/<?php echo $key->nik ?>" class="btn btn-danger btn-xs"><li class="glyphicon glyphicon-trash"></li></a>
                  </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Profile</h4>
                  </div>
                  <div class="modal-body">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                      <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-square" id="viewImage" src="" style="height:190px;width:170px;" alt="User profile picture">

                        <h3 class="profile-username text-center" id="viewNama">Nama</h3>

                        <p class="text-muted text-center" id="viewNik">Nik</p>
                        <div class="row">
                          <div class="col-md-6">
                            <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                <b>Tempat Lahir</b> <a class="pull-right" id="viewTempatLahir">...</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                <b>Tanggal Lahir</b> <a class="pull-right" id="viewTanggalLahir">...</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-12">
                            <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                <b>Alamat</b> <p><a id="viewAlamat">...</a></p>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                <b>Jenis Kelamin</b> <a class="pull-right" id="viewJenisKelamin">...</a>
                              </li>
                              <li class="list-group-item">
                                <b>Agama</b><a class="pull-right" id="viewAgama">...</a>
                              </li>
                              <li class="list-group-item">
                                <b>Status</b><a class="pull-right" id="viewStatus">...</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                <b>Golongan Darah</b><a class="pull-right" id="viewGolDarah">...</a>
                              </li>
                              <li class="list-group-item">
                                <b>Pekerjaan</b><a class="pull-right" id="viewPekerjaan">...</a>
                              </li>
                              <li class="list-group-item">
                                <b>Kewarganegaraan</b><a class="pull-right" id="viewKewarganegaraan">...</a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <button class="btn btn-primary btn-block" data-dismiss="modal"><b>Close</b></button>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
<!--                   <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div> -->
                </div>

              </div>
            </div>

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