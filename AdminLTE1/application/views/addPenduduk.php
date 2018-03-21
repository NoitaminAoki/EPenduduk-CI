  <!-- Side Bar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
        <li class="<?php if(isset($penduduk)){echo "active";};?>"><a href="<?php echo base_url('penduduk/showAll') ?>"><i class="glyphicon glyphicon-list"></i> <span>Data Penduduk</span></a></li>
        <li class="<?php if(!isset($penduduk)){echo "active";};?>"><a href="<?php echo base_url('penduduk/tambahPenduduk') ?>"><i class="glyphicon glyphicon-plus"></i> <span>Tambah Penduduk</span></a></li>
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
        <?php if(isset($penduduk)){echo "Edit Penduduk";}else{echo "Tambah Penduduk";}?>
        <small>Menu Utama</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php base_url(); ?>/AdminLTE1/penduduk/showAll"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php if(isset($penduduk)){echo "Edit Penduduk";}else{echo "Tambah Penduduk";}?></li>
      </ol>
    </section>

    <!-- START Naronya Disini!!! -->

    <!-- Main content -->
    <section class="content">
      <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><?php if(isset($penduduk)){echo "Edit Data";}else{echo "Tambah Data";}?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <form class="col-sm-12" action="<?php if (isset($penduduk)) {
                echo base_url('Penduduk/updatePenduduk');
              }else{echo base_url('Penduduk/savePenduduk');} ?>" onsubmit="return confirm('<?php if(isset($penduduk)) {echo 'Update data dengan nik '.$penduduk->nik.' ?';}else{echo 'Buat data ?';} ?>')" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nik">NIK</label>
                  <input type="hidden" class="form-control" id="nik_lama" name="nik_lama" value="<?php if (isset($penduduk)) {echo $penduduk->nik; }else {}?>" placeholder="nik">
                  <input type="text" class="form-control" id="nik" name="nik" value="<?php if (isset($penduduk)) {echo $penduduk->nik; }else {}?>" placeholder="nik" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" value="<?php if (isset($penduduk)) {echo $penduduk->nama; }else {}?>" name="nama" placeholder="nama lengkap" required>
                </div>

                <div class="form-group col-md-6">
                  <label>Tempat Lahir</label>
                  <select class="form-control select2" id="selectKota" name="tempat_lahir" style="width: 100%;" required>
                    <?php if (isset($penduduk)) { ?>
                    <option disabled>Tempat Lahir</option>
                    <?php foreach ($data_Kota as $key) {
                      if ($penduduk->tempat_lahir == $key->nama_kota) {
                        echo "<option value=".$key->nama_kota." selected>".$key->nama_kota."</option>";
                      }else{
                        echo "<option value=".$key->nama_kota.">".$key->nama_kota."</option>";
                      }
                    }
                  }else{ ?>
                  <option selected="selected" disabled>Tempat Lahir</option>
                  <?php foreach ($data_Kota as $key) {
                    echo "<option value=".$key->nama_kota.">".$key->nama_kota."</option>";
                  }
                } ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tanggal_lahir" value="<?php if (isset($penduduk)) {echo $penduduk->tanggal_lahir; }else {}?>" name="tanggal_lahir" placeholder="tanggal lahir" required>
                </div>
              </div>
            </div>

            <div class="form-group col-md-12">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat tempat tinggal" required><?php if (isset($penduduk)) {echo $penduduk->alamat; }else {}?></textarea>
            </div>

            <div class="form-group col-md-6">
              <label>Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" style="width: 100%;" required>
                <?php if (isset($penduduk)) { ?>
                <option disabled>Jenis Kelamin</option>
                <option value="Laki-Laki" <?php if ($penduduk->jenis_kelamin == "Laki-Laki") {
                  echo "selected";
                } ?> >Laki-Laki</option>
                <option value="Perempuan" <?php if ($penduduk->jenis_kelamin == "Perempuan") {
                  echo "selected";
                } ?> >Perempuan</option> 
                <?php }else { ?>
                <option disabled selected>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                <?php }  ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label>Golongan Darah</label>
              <select id="gol_darah" name="gol_darah" class="form-control" style="width: 100%;" required>
                <?php if (isset($penduduk)) {?>
                <option disabled>Golongan Darah</option>
                <option value="A" <?php if ($penduduk->gol_darah == "A") {echo "selected"; } ?> >A</option>
                <option value="B" <?php if ($penduduk->gol_darah == "B") {echo "selected"; } ?> >B</option>
                <option value="AB" <?php if ($penduduk->gol_darah == "AB") {echo "selected"; } ?> >AB</option>
                <option value="O" <?php if ($penduduk->gol_darah == "O") {echo "selected"; } ?> >O</option>
                <?php }else { ?>
                <option disabled selected>Golongan Darah</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="agama">Agama</label>
              <input type="text" class="form-control" value="<?php if (isset($penduduk)) {echo $penduduk->agama; }else {}?>" name="agama" id="agama" placeholder="agama" required>
            </div>

            <div class="form-group col-md-6">
              <label>Status</label>
              <select id="status" name="status" class="form-control" style="width: 100%;" required>
                <?php if (isset($penduduk)) {?>
                <option disabled>Status</option>
                <option value="Lajang" <?php if ($penduduk->status == "Lajang") {echo "selected"; } ?> >Lajang</option>
                <option value="Menikah" <?php if ($penduduk->status == "Menikah") {echo "selected"; } ?> >Menikah</option>
                <option value="Duda" <?php if ($penduduk->status == "Duda") {echo "selected"; } ?> >Duda</option>
                <option value="Janda" <?php if ($penduduk->status == "Janda") {echo "selected"; } ?> >Janda</option>
                <?php }else { ?>
                <option disabled selected>Status</option>
                <option value="Lajang">Lajang</option>
                <option value="Menikah">Menikah</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" class="form-control" value="<?php if (isset($penduduk)) {echo $penduduk->pekerjaan; }else {}?>" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" required>
            </div>

            <div class="form-group col-md-6">
              <label for="kewarganegaraan">Kewarganegaraan</label>
              <input type="text" name="kewarganegaraan" value="<?php if (isset($penduduk)) {echo $penduduk->kewarganegaraan; }else {}?>" class="form-control" id="kewarganegaraan" placeholder="kewarganegaraan" required>
            </div>


            <div class="form-group col-md-12">
              <label for="password">Password</label>
              <input type="password" class="form-control" value="<?php if (isset($penduduk)) {echo $penduduk->password; }else {}?>" name="password" id="password" placeholder="password" required>
            </div>
            <div class="form-group col-md-12">
              <input type="checkbox" class="filled-in" id="filled-in-box"/>
              <label for="filled-in-box">Perlihatkan password</label>
            </div>

            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class="input-field col-12">
                <div class="file-field input-field">
                  <div class="btn btn-info">
                    <span style="position:relative;top:-50%;transform:translateY(-50%);"><b>Foto Ktp</b></span>
                    <input id="inputFile" type="file" name="foto_ktp" accept="image/*">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path form-control validate" name="nama_foto" type="text"  value="<?php if (isset($penduduk)) {echo $penduduk->foto_ktp; }else {}?>" placeholder="Pilih foto ktp" required>
                    <input type="hidden" name="nama_foto_lama" value="<?php if (isset($penduduk)) {echo $penduduk->foto_ktp; }else {}?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group col-md-12">
              <img onclick="clickImage()" src="<?php if (isset($penduduk)) {$fotonya = $penduduk->foto_ktp;
                echo base_url()."/assets/images/".$fotonya; }else {echo base_url()."/assets/images/logo_camera-null.png";}?>" id="image_ktp" class="materialboxed img-thumbnail" style="width:200px;height:200px;">
              </div>
              <div class="form-group">
                <br>
              </div>
              <div class="form-group col-md-12">
                <a class="btn btn-warning btn-lg" href="<?php base_url(); ?>/AdminLTE1/penduduk/showAll" style="float:left;">Kembali</a>
                <button class="btn btn-primary btn-lg" type="submit" style="float:right;">Simpan</button>
              </div>

            </div>
          </form>
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
