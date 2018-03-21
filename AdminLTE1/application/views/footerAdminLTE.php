  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Alpha
    </div>
    <strong>Pasteright &copy; 2018-20xx <a href="https://adminlte.io">technoId Soft</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<style type="text/css">

.btn-datatables {
  margin:5px;
}

.materialboxed {
  display: block;
  cursor: -webkit-zoom-in;
  cursor: zoom-in;
  position: relative;
  -webkit-transition: opacity .4s;
  transition: opacity .4s;
  -webkit-backface-visibility: hidden;
}

.materialboxed:hover:not(.active) {
  opacity: .8;
  cursor: pointer;
}

.materialboxed.active {
  cursor: -webkit-zoom-out;
  cursor: zoom-out;
}

#materialbox-overlay {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: #292929;
  z-index: 1000;
  will-change: opacity;
}

.hidden {
 visibility: hidden;
}

 /* File Input
 ========================================================================== */
 .file-field {
  position: relative;
}

.file-field .file-path-wrapper {
  overflow: hidden;
  padding-left: 10px;
}

.file-field input.file-path {
  width: 100%;
}

.file-field .btn, .file-field .btn-large {
  float: left;
  height: 3rem;
  line-height: 3rem;
}

.file-field span {
  cursor: pointer;
}

.file-field input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}

.file-field input[type=file]::-webkit-file-upload-button {
  display: none;
}

 /* End File Input
 ========================================================================== */

   /* Checkboxes
   ========================================================================== */
   /* CUSTOM CSS CHECKBOXES */
   form p {
    margin-bottom: 10px;
    text-align: left;
  }

  form p:last-child {
    margin-bottom: 0;
  }

  /* Remove default checkbox */
  [type="checkbox"]:not(:checked),
  [type="checkbox"]:checked {
    position: absolute;
    opacity: 0;
    pointer-events: none;
  }

  [type="checkbox"] {
    /* checkbox aspect */
  }

  [type="checkbox"] + label {
    position: relative;
    padding-left: 35px;
    cursor: pointer;
    display: inline-block;
    height: 25px;
    line-height: 25px;
    font-size: 1.2rem;
    color: grey;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  [type="checkbox"] + label:before,
  [type="checkbox"]:not(.filled-in) + label:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 18px;
    height: 18px;
    z-index: 0;
    border: 2px solid #5a5a5a;
    border-radius: 1px;
    margin-top: 2px;
    -webkit-transition: .2s;
    transition: .2s;
  }

  [type="checkbox"]:not(.filled-in) + label:after {
    border: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }

  [type="checkbox"]:not(:checked):disabled + label:before {
    border: none;
    background-color: rgba(0, 0, 0, 0.42);
  }

  [type="checkbox"].tabbed:focus + label:after {
    -webkit-transform: scale(1);
    transform: scale(1);
    border: 0;
    border-radius: 50%;
    -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: rgba(0, 0, 0, 0.1);
  }

  [type="checkbox"]:checked + label:before {
    top: -4px;
    left: -5px;
    width: 12px;
    height: 22px;
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    border-right: 2px solid #26a69a;
    border-bottom: 2px solid #26a69a;
    -webkit-transform: rotate(40deg);
    transform: rotate(40deg);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
  }

  [type="checkbox"]:checked:disabled + label:before {
    border-right: 2px solid rgba(0, 0, 0, 0.42);
    border-bottom: 2px solid rgba(0, 0, 0, 0.42);
  }

  /* Indeterminate checkbox */
  [type="checkbox"]:indeterminate + label:before {
    top: -11px;
    left: -12px;
    width: 10px;
    height: 22px;
    border-top: none;
    border-left: none;
    border-right: 2px solid #26a69a;
    border-bottom: none;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
  }

  [type="checkbox"]:indeterminate:disabled + label:before {
    border-right: 2px solid rgba(0, 0, 0, 0.42);
    background-color: transparent;
  }

  [type="checkbox"].filled-in + label:after {
    border-radius: 2px;
  }

  [type="checkbox"].filled-in + label:before,
  [type="checkbox"].filled-in + label:after {
    content: '';
    left: 0;
    position: absolute;
    /* .1s delay is for check animation */
    -webkit-transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
    transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
    z-index: 1;
  }

  [type="checkbox"].filled-in:not(:checked) + label:before {
    width: 0;
    height: 0;
    border: 3px solid transparent;
    left: 6px;
    top: 10px;
    -webkit-transform: rotateZ(37deg);
    transform: rotateZ(37deg);
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
  }

  [type="checkbox"].filled-in:not(:checked) + label:after {
    height: 20px;
    width: 20px;
    background-color: transparent;
    border: 2px solid #5a5a5a;
    top: 0px;
    z-index: 0;
  }

  [type="checkbox"].filled-in:checked + label:before {
    top: 0;
    left: 1px;
    width: 8px;
    height: 13px;
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    border-right: 2px solid #fff;
    border-bottom: 2px solid #fff;
    -webkit-transform: rotateZ(37deg);
    transform: rotateZ(37deg);
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
  }

  [type="checkbox"].filled-in:checked + label:after {
    top: 0;
    width: 20px;
    height: 20px;
    border: 2px solid #26a69a;
    background-color: #26a69a;
    z-index: 0;
  }

  [type="checkbox"].filled-in.tabbed:focus + label:after {
    border-radius: 2px;
    border-color: #5a5a5a;
    background-color: rgba(0, 0, 0, 0.1);
  }

  [type="checkbox"].filled-in.tabbed:checked:focus + label:after {
    border-radius: 2px;
    background-color: #26a69a;
    border-color: #26a69a;
  }

  [type="checkbox"].filled-in:disabled:not(:checked) + label:before {
    background-color: transparent;
    border: 2px solid transparent;
  }

  [type="checkbox"].filled-in:disabled:not(:checked) + label:after {
    border-color: transparent;
    background-color: #949494;
  }

  [type="checkbox"].filled-in:disabled:checked + label:before {
    background-color: transparent;
  }

  [type="checkbox"].filled-in:disabled:checked + label:after {
    background-color: #949494;
    border-color: #949494;
  }

   /* END Checkboxes
   ========================================================================== */

 </style>

 <!-- jQuery 3 -->
 <script src="<?php echo base_url()?>/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="<?php echo base_url()?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>


// ============================== AJAX ============================ //

function viewDataPenduduk(nik)
{
    //Ajax Load data from ajax
    $.ajax({
      url : "<?php echo base_url() ?>Penduduk/viewByNik/" + nik,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {

        $('#viewImage').attr("src","<?php echo base_url() ?>assets/images/" + data.foto_ktp);
        $('#viewNama').text(data.nama);
        $('#viewNik').text(data.nik);
        $('#viewTempatLahir').text(data.tempat_lahir);
        $('#viewTanggalLahir').text(data.tanggal_lahir);
        $('#viewJenisKelamin').text(data.jenis_kelamin);
        $('#viewAlamat').text(data.alamat);
        $('#viewAgama').text(data.agama);
        $('#viewStatus').text(data.status);
        $('#viewPekerjaan').text(data.pekerjaan);
        $('#viewKewarganegaraan').text(data.kewarganegaraan);
        $('#viewGolDarah').text(data.gol_darah);

      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error get data from ajax');
      }
    });
  }

  function viewDataKota(id)
  {
    //Ajax Load data from ajax
    $.ajax({
      url : "<?php echo base_url() ?>data/kota/edit/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $('#id_edit_kota').val(data.id);
        $('#nama_edit_kota').val(data.nama_kota);
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error get data from ajax');
      }
    });
  }

  function viewDataDesa(id)
  {
    //Ajax Load data from ajax
    $.ajax({
      url : "<?php echo base_url() ?>data/surat/edit/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $('#id-desa').val(data.id);
        $('#kabupaten-edit').val(data.kabupaten);
        $('#kecamatan-edit').val(data.kecamatan);
        $('#kelurahan-edit').val(data.kelurahan);
        $('#no_telp-edit').val(data.no_telp);
        $('#alamat-edit').text(data.alamat);
        $('#nama_kades-edit').val(data.nama_pejabat);
        $('#alamat_kades-edit').text(data.alamat_pejabat);
        $('#penutup-edit').val(data.penutup_surat); 
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error get data from ajax');
      }
    });
  }

// ============================== AJAX ============================ //

$(document).on("click","#filled-in-box",function() {
  if ($("#password").attr("type") == "password") {
    $("#password").attr("type","text");
  }
  else{
    $("#password").attr("type","password");
  }
});

$(document).on('change','#inputFile', function(event) {
  var bcc = URL.createObjectURL(event.target.files[0]);
  $("#image_ktp").attr("src", bcc);
      //$("#inputPassword4").val(event.target.files[0].name);
    });

$(document).on('click', '.sidebar-menu li', function() {
  if(!$(this).hasClass("treeview") && !$(this).hasClass("header")){
    $(".sidebar-menu li").removeClass("active");
    $(this).addClass("active");
  }

});


$.widget.bridge('uibutton', $.ui.button);

$(document).ready(function() {
  $('#dataPendudukAll').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  });

  $('#dataDesaAll').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  });

  $('#notifications').slideDown('slow').delay(3000).slideUp('slow');

  $("#tanggal_lahir").datepicker({
    autoclose: true,
    todayHighlight: true,
    orientation: 'bottom',
    format: 'yyyy/mm/dd',
  });

  $('.select2').select2();
  $('.materialboxed').materialbox();

});

$(document).on("click","#materialbox-overlay",function() {
  document.getElementById("header").style.visibility = "visible";
});

function clickImage() {
 if (document.getElementById("header").style.visibility != "hidden") {
  document.getElementById("header").style.visibility = "hidden";
}else {
  document.getElementById("header").style.visibility = "visible";
}





}
</script>

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url()?>/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>/dist/js/demo.js"></script>
<!-- Materialize Js -->
<script type="text/javascript" src="http://localhost/AdminLTE1/assets/materialize/js/materialize.min.js"></script>
</body>
</html>
