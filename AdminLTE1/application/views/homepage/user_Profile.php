                    <div class="row my-2">
                      <div class="col-lg-12 order-lg-2">
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <div class="row nav" id="menu-profile" style="width: 300px;">
                              <a class="nav-item nav-link active" id="nav-profiles-tab" data-toggle="tab" href="#profiles" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
                              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="nav-profile" aria-selected="false">Home</a>
                              <a class="nav-item nav-link" id="nav-edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="nav-contact" aria-selected="false">Edit</a>
                            </div>
                          </div>
                        </nav>
                        <div class="tab-content py-4" id="tab-menu-profile">
                          <div class="tab-pane fade show active" id="profiles">
                            <div class="team-member">
                              <img src="<?php echo base_url('assets/images/').$profile->foto_ktp ?>" class="mx-auto img-fluid d-block" alt="avatar">
                              <h5 class="mb-3"><?php echo $profile->nama ?></h5>
                            </div>
                            <div class="row">

                              <div class="col-12">
                               <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item col-6">
                                  <a class="active btn btn-outline-success" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i  class="fa fa-th"></i></a>
                                </li>
                                <li class="nav-item col-6">
                                  <a class="btn btn-outline-success" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-list"></i></a>
                                </li>
                              </ul> 
                            </div>

                            <div class="tab-content col-12" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                  <div class="col-12">
                                    <h6>Alamat</h6>
                                    <p><?php echo $profile->alamat ?></p>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-4">
                                    <h6>NIK</h6>
                                    <p>
                                      <?php echo $profile->nik ?>
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                  <h6>Tempat &#38; Tanggal Lahir</h6>
                                  <p>
                                    <?php echo $profile->tempat_lahir.", ".date_format($profile->tanggal_lahir, "d F Y") ?>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                    <h6>Jenis Kelamin</h6>
                                    <p><?php echo $profile->jenis_kelamin ?></p>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                    <h6>Golongan Darah</h6>
                                    <p><?php echo $profile->gol_darah ?></p>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                    <h6>Agama</h6>
                                    <p><?php echo $profile->agama ?></p>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                    <h6>Status</h6>
                                    <p><?php echo $profile->status ?></p>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <h6>Pekerjaan</h6>
                                    <p><?php echo $profile->pekerjaan ?></p>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <h6>Kewarganegaraan</h6>
                                    <p><?php echo $profile->kewarganegaraan ?></p>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                  <div class="col-12 border-top">
                                    <div class="row border-top">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>NIK</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->nik ?></div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="row">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>Tempat &#38; Tanggal Lahir</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->tempat_lahir.", ".date_format($profile->tanggal_lahir, "d F Y") ?></div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="row">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>Alamat</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->alamat ?></div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="row">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>Jenis Kelamin</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->jenis_kelamin ?></div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="row">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>Golongan Darah</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->gol_darah ?></div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="row">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>Agama</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->agama ?></div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="row">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>Status</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->status ?></div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="row">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>Pekerjaan</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->pekerjaan ?></div>
                                    </div>
                                  </div>
                                  <div class="col-12 border-bottom">
                                    <div class="row border-bottom">
                                      <div class="col-md-2 col-sm-3 col-6 text-left"><strong>Kewarganegaraan</strong></div>
                                      <div class="col-sm-1 col-6 text-right">:</div>
                                      <div class="col-md-9 col-sm-8 col-12 text-left"><?php echo $profile->kewarganegaraan ?></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-12"><br></div>
                            <div class="col-md-12">
                              <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                              <table class="table table-sm table-hover table-striped">
                                <tbody>                                    
                                  <tr>
                                    <td>
                                      <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <!--/row-->
                        </div>
                        <div class="tab-pane fade" id="messages">
                          <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                          </div>
                          <table class="table table-hover table-striped">
                            <tbody>                                    
                              <tr>
                                <td>
                                 <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                               </td>
                             </tr>
                             <tr>
                              <td>
                               <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                             </td>
                           </tr>
                           <tr>
                            <td>
                             <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                           </td>
                         </tr>
                         <tr>
                          <td>
                           <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                         </td>
                       </tr>
                       <tr>
                        <td>
                         <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                       </td>
                     </tr>
                   </tbody> 
                 </table>
               </div>
               <div class="tab-pane fade" id="edit">
                <form role="form">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="text" value="Jane">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="text" value="Bishop">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="email" value="email@gmail.com">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Company</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Website</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="url" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="text" value="" placeholder="Street">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-6">
                      <input class="form-control" type="text" value="" placeholder="City">
                    </div>
                    <div class="col-lg-3">
                      <input class="form-control" type="text" value="" placeholder="State">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                    <div class="col-lg-9">
                      <select id="user_time_zone" class="form-control" size="0">
                        <option value="Hawaii">(GMT-10:00) Hawaii</option>
                        <option value="Alaska">(GMT-09:00) Alaska</option>
                        <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                        <option value="Arizona">(GMT-07:00) Arizona</option>
                        <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                        <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                        <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                        <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="text" value="janeuser">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="password" value="11111122333">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="password" value="11111122333">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                      <input type="reset" class="btn btn-secondary" value="Cancel">
                      <input type="button" class="btn btn-primary" value="Save Changes">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


