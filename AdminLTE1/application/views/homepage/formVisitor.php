            <section id="signin" class="bg-light">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Sign In</h2>
                    <h3 class="section-subheading text-muted">Sign In into your account</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <form class="needs-validation" method="post" action="<?php echo base_url('homepage/login') ?>" novalidate>
                      <div class="form-row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                          <label for="nik_signin">Nik</label>
                          <input type="text" class="form-control" id="nik_signin" name="nik_signin" placeholder="Your nik" pattern="[0-9]{1,}" required>
                          <div class="invalid-feedback">
                            You must fill with your nik and only number are allowed!
                          </div>
                        </div>
                        <div class="col-md-3"></div>
                      </div>
                      <div class="col-md-12"><br></div>
                      <div class="form-row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                          <label for="password_signin">Password</label>
                          <div class="input-group">
                            <input type="password" class="form-control" name="password_signin" id="password_signin" placeholder="password" required>
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-eye-slash showPass" data-target="#password_signin"></i></span>
                            </div>
                            <div class="invalid-feedback">
                              You must fill with your password!
                            </div>
                          </div>

                        </div>
                        <div class="col-md-3"></div>
                      </div>
                      <div class="col-md-12"><br></div>
                      <div class="form-row">
                        <div class="col-md-3"></div>
                        <button class="btn btn-primary col-md-6" type="submit">Sign In</button>
                        <div class="col-md-3"></div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </section>

            <!-- About -->
            <section id="signup">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Sign Up</h2>
                    <h3 class="section-subheading text-muted">Already have an account? sign in <a class="js-scroll-trigger" href="#signin">here</a></h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 col-sm-2"></div>
                  <form class="needs-validation col-sm-8" action="<?php echo base_url('homepage/register') ?>" onsubmit="return confirm('Ingin buat data?')" method="post" enctype="multipart/form-data" novalidate>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" pattern="[0-9]{1,}" placeholder="nik" required>
                        <div class="invalid-feedback">
                          You must fill with your nik and only number are allowed!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap" required>
                        <div class="invalid-feedback">
                          You must fill this!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Tempat Lahir</label>
                        <select class="custom-select select2" id="selectKota" name="tempat_lahir" style="width: 100%;" required>
                          <option selected="selected" disabled>Tempat Lahir</option>
                          <?php foreach ($data_Kota as $key) {
                            echo "<option value=".$key->nama_kota.">".$key->nama_kota."</option>";
                          } ?>
                        </select>
                        <div class="invalid-feedback">
                          You must select an item in the list!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <label class="sr-only" for="tanggal_lahir">Tanggal Lahir</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                            <input type="text" class="form-control pull-right" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal lahir" required>
                            <div class="invalid-feedback">
                              You must select an item in the list!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat tempat tinggal" required></textarea>
                        <div class="invalid-feedback">
                          You must fill this!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="custom-select" style="width: 100%;" required>
                          <option disabled selected>Jenis Kelamin</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="invalid-feedback">
                          You must select an item in the list!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Golongan Darah</label>
                        <select id="gol_darah" name="gol_darah" class="custom-select" style="width: 100%;" required>
                          <option disabled selected>Golongan Darah</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="AB">AB</option>
                          <option value="O">O</option>
                        </select>
                        <div class="invalid-feedback">
                          You must select an item in the list!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" name="agama" id="agama" placeholder="agama" required>
                        <div class="invalid-feedback">
                          You must fill this!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Status</label>
                        <select id="status" name="status" class="custom-select" style="width: 100%;" required>
                          <option disabled selected>Status</option>
                          <option value="Lajang">Lajang</option>
                          <option value="Menikah">Menikah</option>
                          <option value="Duda">Duda</option>
                          <option value="Janda">Janda</option>
                        </select>
                        <div class="invalid-feedback">
                          You must fill this!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" required>
                        <div class="invalid-feedback">
                          You must fill this!
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="kewarganegaraan" required>
                        <div class="invalid-feedback">
                          You must fill this!
                        </div>
                      </div>


                      <div class="form-group col-md-12">
                        <label for="password">Password</label>
                        <div class="input-group">
                          <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-eye-slash showPass" data-target="#password"></i></span>
                          </div>
                          <div class="invalid-feedback">
                            You must fill this!
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <br>
                      </div>
                      <div class="form-group col-md-12">
                        <label>Foto Ktp</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="foto_ktp" name="foto_ktp" accept="image/*" required>

                          <div class="invalid-feedback">
                            You must choose your photo!
                          </div>
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>

                      </div>

                      <div class="form-group col-md-12">
                        <img onclick="clickImage()" src="<?php echo base_url()."/assets/images/logo_camera-null.png"?>" id="image_ktp" class="materialboxed img-thumbnail" style="width:200px;height:200px;">
                      </div>
                      <div class="form-group">
                        <br>
                      </div>
                      <div class="form-group col-md-12">
                        <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                      </div>
                      <div class="form-group col-md-12">
                        <button class="btn btn-primary col-md-12" type="submit">Sign Up</button>
                      </div>

                    </div>
                  </form>
                  <div class="col-md-2 col-sm-2"></div>
                </div>
              </div>
            </section>