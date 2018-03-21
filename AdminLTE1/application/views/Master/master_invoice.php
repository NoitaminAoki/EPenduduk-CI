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
          <li><a href="<?php echo base_url('data/kota') ?>"><i class="fa fa-circle-o"></i>Kota</a></li>
          <li class="active"><a href="<?php echo base_url('data/surat') ?>"><i class="fa fa-circle-o"></i>Surat Keterangan Domisili</a></li>
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
      Master Data - Surat Keterangan Domisili
      <small>Menu Sekunder</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('penduduk/showAll') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Surat</li>
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
            <h3 class="box-title">Konfigurasi Surat Keterangan Domisili</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive" style="">
            <div>
              <button class="btn btn-success" data-toggle="modal" data-target="#modal-default"><li class="glyphicon glyphicon-plus"></li> Tambah Data</button>
            </div>
            <br>
            <table id="dataDesaAll" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                 <th>No</th>
                 <th>Kabupaten</th>
                 <th>Kecamatan</th>
                 <th>Kelurahan</th>
                 <th>Nama Kepala Desa</th>
                 <th>Aksi</th>
               </tr>
             </thead>
             <tbody>
               <?php $no = 1; 
               foreach ($data_Desa as $key) { ?>
               <tr>
                 <td><?php echo $no++ ?></td>
                 <td><?php echo $key->kabupaten ?></td>
                 <td><?php echo $key->kecamatan ?></td>
                 <td><?php echo $key->kelurahan ?></td>
                 <td><?php echo $key->nama_pejabat ?></td>
                 <td>
                   <div style="width: 125px;">
                     <a href="javascript::(0);" class="btn btn-primary btn-xs"><li class="fa fa-eye"></li> View</a>
                     <a href="#modal-edit" data-toggle="modal" onclick="viewDataDesa(<?php echo $key->id ?>)" class="btn btn-warning btn-xs"><li class="fa fa-pencil"></li> Edit</a>
                     <a href="<?php echo base_url('data/surat/delete/').$key->id;  ?>" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger btn-xs"><li class="fa fa-trash"></li></a>
                   </div>
                 </td>
               </tr>
               <?php } ?>
             </tbody>
             <tfoot>
              <tr>
                <th>No</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Nama Kepala Desa</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>

            </tbody>
          </table>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <div class="col-md-12">
      <div class="box box-primary box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Pendaftar Surat Keterangan Domisili</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive" style="">

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- Modal Tambah Data -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-light-blue disabled color-palette">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Data</h4>
          </div>
          <form onsubmit="return confirm('Buat Data?')" action="<?php echo base_url('data/surat/tambah') ?>" class="col-12" method="post">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12 bg-gray text-center"><h4 class="text-muted">Desa</h4></div>
                <div class="col-md-12"><br></div>
                <div class="col-md-6">
                  <label for="kabupaten">Kabupaten</label>
                  <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
                </div>
                <div class="col-md-6">
                  <label for="kecamatan">Kecamatan</label>
                  <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                </div>
                <div class="col-md-12"><br></div>
                <div class="col-md-6">
                  <label for="kelurahan">Kelurahan</label>
                  <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                </div>
                <div class="form-group col-md-6">
                  <label>No. Telp Kantor</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      (+62)
                    </div>
                    <input type="number" class="form-control" id="no_telp" name="no_telp" required>
                  </div>
                </div>
                <div class="col-md-12"><br></div>
                <div class="col-md-6">
                  <label for="alamat">Alamat Desa</label>
                  <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                </div>
                <div class="col-md-6">
                  <label for="penutup">Lampiran Penutup Surat</label>
                  <textarea class="form-control" id="penutup" name="penutup" required></textarea>
                </div>
                <div class="col-md-12"><br></div>
                <div class="col-lg-12 bg-gray text-center"><h4 class="text-muted">Kepala Desa/Lurah</h4></div>
                <div class="col-md-12"><br></div>
                <div class="col-md-6">
                  <label for="nama_kades">Nama Kepala Desa</label>
                  <input type="text" class="form-control" id="nama_kades" name="nama_kades" required>
                </div>
                <div class="col-md-6">
                  <label for="alamat_kades">Alamat Kepala Desa</label>
                  <textarea class="form-control" id="alamat_kades" name="alamat_kades" required></textarea>
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
    <div class="modal fade" id="modal-edit">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-light-blue disabled color-palette">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Data</h4>
            </div>
            <form onsubmit="return confirm('Edit Data?')" action="<?php echo base_url('data/surat/update') ?>" class="col-12" method="post">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12 bg-gray text-center"><h4 class="text-muted">Desa</h4></div>
                  <div class="col-md-12"><br></div>
                  <div class="col-md-6">
                    <input type="hidden" class="form-control" id="id-desa" name="id-desa" required>
                    <label for="kabupaten-edit">Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten-edit" name="kabupaten-edit" required>
                  </div>
                  <div class="col-md-6">
                    <label for="kecamatan-edit">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan-edit" name="kecamatan-edit" required>
                  </div>
                  <div class="col-md-12"><br></div>
                  <div class="col-md-6">
                    <label for="kelurahan-edit">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan-edit" name="kelurahan-edit" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>No. Telp Kantor</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        (+62)
                      </div>
                      <input type="number" class="form-control" id="no_telp-edit" name="no_telp-edit" required>
                    </div>
                  </div>
                  <div class="col-md-12"><br></div>
                  <div class="col-md-6">
                    <label for="alamat-edit">Alamat Desa</label>
                    <textarea class="form-control" id="alamat-edit" name="alamat-edit" required></textarea>
                  </div>
                  <div class="col-md-6">
                    <label for="penutup-edit">Lampiran Penutup Surat</label>
                    <textarea class="form-control" id="penutup-edit" name="penutup-edit" required></textarea>
                  </div>
                  <div class="col-md-12"><br></div>
                  <div class="col-lg-12 bg-gray text-center"><h4 class="text-muted">Kepala Desa/Lurah</h4></div>
                  <div class="col-md-12"><br></div>
                  <div class="col-md-6">
                    <label for="nama_kades-edit">Nama Kepala Desa</label>
                    <input type="text" class="form-control" id="nama_kades-edit" name="nama_kades-edit" required>
                  </div>
                  <div class="col-md-6">
                    <label for="alamat_kades">Alamat Kepala Desa</label>
                    <textarea class="form-control" id="alamat_kades-edit" name="alamat_kades-edit" required></textarea>
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