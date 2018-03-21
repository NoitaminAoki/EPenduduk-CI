<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Penduduk LTE | Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>/assets/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- select 2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>/bower_components/select2/dist/css/select2.min.css">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url() ?>/assets/homepage/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>/assets/homepage/css/agency.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/homepage/css/agency-creator.css" rel="stylesheet">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">E-Penduduk LTE</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <?php if($this->session->userdata('status') != 'user_LoggedIn') { ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signin">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <?php } if ($this->session->userdata('status') == 'user_LoggedIn') { ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#domicile">Domicile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a href="javascript::(0);" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0px;">Me</a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-card-content">
                  <div class="card-header btn-primary text-center text-capitalize"><b>Header</b></div>
                  <div class="card-body">
                    <h5 class="card-title text-center text-capitalize"><?php echo $profile->nama ?></h5>
                    <p class="card-text text-capitalize text-muted text-center"><?php echo $profile->nik ?></p>
                  </div>
                  <div class="card-footer">
                    <div class="row">
                      <a href="#portfolioModal1" data-toggle="modal" class="col-4 btn btn-sm btn-secondary text-capitalize"><i class="fa fa-user"> Profile</i></a>
                      <div class="col-4"></div>
                      <a href="<?php echo base_url('homepage/logout') ?>" class="col-4 btn btn-sm btn-secondary text-capitalize"><i class="fa fa-power-off"> Logout</i></a></div>
                    </div>
                  </div>
                  <div class="dropdown-menu-list-content">
                    <ul class="text-uppercase ml-auto menu-list-content">
                      <li class="nav-item"><a href="#portfolioModal1" data-toggle="modal" class="nav-link"><i class="fa fa-user"> Profile</i></a></li>
                      <li class="nav-item"><a href="<?php echo base_url('homepage/logout') ?>" class="nav-link"><i class="fa fa-power-off"> Logout</i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Studio!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a href="#portfolioModal2" data-toggle="modal" class="btn btn-primary btn-xl">
            Get Started
          </a>
        </div>
      </div>
    </header>

    <?php if ($this->session->userdata('status') != 'user_LoggedIn') { ?>
    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">E-Commerce</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Responsive Design</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section>
    <?php }

            // Section Domicile

    if ($this->session->userdata('status') == 'user_LoggedIn') {
    // Include Form Login and Register
      include './application/views/homepage/surat_Domisili.php';
    }
            // END Section Domicile


            // Section Sign In and Sign Up

    if ($this->session->userdata('status') != 'user_LoggedIn') {
    // Include Form Login and Register
      include './application/views/homepage/formVisitor.php';
    } ?>

    <!-- END Section Sign In and Sign Up -->

    <!-- Profile -->
    <?php if ($this->session->userdata('status') == "user_LoggedIn") { ?>
    <section class="bg-light" id="profile">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Profile</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/images/').$profile->foto_ktp ?>" alt="">
              <h4><?php echo $profile->nama ?></h4>
              <p class="text-muted"><?php echo $profile->nik ?></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" data-html="true" title='Edit Your Profile Here'>
                  <a href="#profile" onclick="showModalEdit()">
                    <i class="fa fa-pencil"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4"></div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">More Information <a data-target="#portfolioModal1" data-toggle="modal" href="">Here.</a></p>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright"><strong>Pasteright &copy; 2018-20xx <a href="https://google.com">technoId Soft</a>.</strong><br>All rights
            reserved.</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <?php if($this->session->userdata('status') == 'user_LoggedIn') { ?>
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl">
              </div>
            </div>
          </div>
          <div class="container">
            <?php include './application/views/homepage/user_Profile.php'; ?>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl">
              </div>
            </div>
          </div>
          <div class="container">
            test
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Loader -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content d-flex align-items-center" style="background-color: transparent;border:none;">
          <div id="loader-wrapper">
            <div id="loader"></div>
          </div>
          <!-- </div> -->
        </div>
      </div>
    </div>

    <style type="text/css">

    .fa-eye,.fa-eye-slash{
      cursor: pointer;
    }
    .card{
      margin-bottom: 10px;
    }

    .disabled{
      cursor: not-allowed;
    }

  </style>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url() ?>/assets/homepage/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url() ?>/assets/homepage/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url() ?>/assets/homepage/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url() ?>/assets/homepage/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url() ?>/assets/homepage/js/agency.min.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url()?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url()?>/bower_components/select2/dist/js/select2.full.min.js"></script>

  <script>

    function showModalEdit() {
      $('#menu-profile').children('a').removeClass('active');
      $('#nav-edit-tab').addClass('active');
      $('#tab-menu-profile').children('div .tab-pane').removeClass('show active');
      $('#edit').addClass('show active');
      $('#portfolioModal1').modal('show');

    };

    function getDataDomisili() {
      if ($('#selectKota')[0].selectedIndex == 0) {alert('You must choose first!')};
    };

    $(document).ready(function() {

      $('#portfolioModal1').on('hidden.bs.modal', function (e) {
        $('#mainNav').addClass('navbar-shrink');
        $('#menu-profile').children('a').removeClass('active');
        $('#nav-profiles-tab').addClass('active');
        $('#tab-menu-profile').children('div .tab-pane').removeClass('show active');
        $('#profiles').addClass('show active');
      });

      $(document).on('click','.showPass', function() {
        var id = $(this).data('target');
        if ($(id).attr("type") == 'password') {
          $(id).attr("type","text");
          $(document).on('click','.fa-eye-slash',function() {
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
          });
        }
        else{
          $(id).attr("type","password");
          $(document).on('click','.fa-eye',function() {
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
          });
        }
      });

      $(document).on('change','#foto_ktp', function(event) {
        var bcc = URL.createObjectURL(event.target.files[0]);
        $("#image_ktp").attr("src", bcc);
      //$("#inputPassword4").val(event.target.files[0].name);
    });

      $('.select2').select2();

      $("#tanggal_lahir").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
      });
    });

    <?php if ($this->session->flashdata('msg_Register')) { ?>
      alert("<?php echo $this->session->flashdata('msg_Register'); ?>");
      $('html, body').animate({
        scrollTop: $("#signin").offset().top
      }, 1000);
      <?php } ?>

      <?php if ($this->session->flashdata('msg')) { ?>
        $('html, body').animate({
          scrollTop: $("#foto_ktp").offset().top
        }, 1000);
        <?php } ?>

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });

    (function() {
      'use strict';
      window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
    })();
  </script>

</body>

</html>
