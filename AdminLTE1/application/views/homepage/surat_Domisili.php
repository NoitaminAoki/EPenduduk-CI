<section id="domicile">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Domicile</h2>
        <h3 class="section-subheading text-muted">Create your own certificate of domicile</h3>
      </div>
      <div class="col-lg-12">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <div class="row nav" style="width: 300px;">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#list-domisili" role="tab" aria-controls="nav-home" aria-selected="true">My apps</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#create-domisili" role="tab" aria-controls="nav-profile" aria-selected="false">Create</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">contact</a>              
            </div>

          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-domisili" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row" style="padding: 10px;">
              <div class="col-lg-12">
                <div class="card">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-3 col-lg-2 d-flex btn-primary p-5">
                        <h1 class="mx-auto align-self-center"><i class="fa fa-2x fa-file-pdf-o"></i></h1>
                      </div>
                      <div class="col-md-9 col-lg-10 py-3">
                        <h3 class="card-title">Kab. Tangerang</h3>
                        <p class="card-text mt-3">Kec. Pupus Jaya, Kel. Seribu, kode Pos 13870</p>
                        <div class="row">
                          <div class="col-lg-8 col-md-5 col-sm-5 col-12 mb-3">
                           <a href="#portfolioSkd" data-toggle="modal" class="btn btn-outline-success mr-1"><li class="fa fa-eye"></li></a><a href="#" class="btn btn-outline-warning mr-1"><li class="fa fa-pencil"></li></a><a href="#" class="btn btn-outline-danger mr-1"><li class="fa fa-trash"></li></a>
                         </div>
                         <!-- <div class="col-md-4"><a href="#" class="btn btn-outline-success"><li class="fa fa-print"></li> Print as PDF</a></div> -->
                         <div class="col-lg-4 col-md-7 col-sm-7 text-center input-group mb-3 text-danger"><div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Status :</span></div><input type="text" class="form-control text-center text-light bg-danger" id="basic-url" value="Not yet accepted" aria-describedby="basic-addon3" disabled></div>
                        </div>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="create-domisili" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-row">
                  <div class="col-12"><br></div>
                  <div class="col-md-6 border-right border-left">
                    <div class="row">
                     <div class="col-12">
                      <label class="btn-block text-center">Domisili yang diinginkan</label>
                      <select class="custom-select select2" id="selectKota" name="tempat_lahir" style="width: 100%;">
                        <option selected="selected" disabled>Domisili</option>
                        <?php foreach ($data_Kota as $key) {
                          echo "<option value=".$key->nama_kota.">".$key->nama_kota."</option>";
                        } ?>
                      </select>
                      <div class="invalid-feedback">
                        You must select an item in the list!
                      </div>                        
                    </div>
                    <div class="col-12">
                      <br>
                      <button class="btn btn-primary btn-block" onclick="getDataDomisili()">Process</button>
                    </div>                    
                  </div>
                </div>
                <div class="d-flex align-items-center col-md-6 border-right border-left">
                <div id="warning" class="alert alert-secondary text-muted col-12 text-center">No data selected!</div>
              </div>
              <div class="col-md-12"><br></div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Modal View -->
<div class="portfolio-modal modal fade" id="portfolioSkd" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container text-left">

      </div>
    </div>
  </div>
</div>