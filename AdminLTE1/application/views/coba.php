<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>E-Penduduk LTE | Laporan</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() ?>/assets/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
	hr { 
		display: block;
		border: 3px solid black;
		border-top-style: ridge;


	}

</style>
</head>
<body>

	<section id="invoice" style="font-size: 10;">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center text-uppercase"><b>pemerintah kabupaten <?php echo $data_Surat->kabupaten ?><br>kecamatan <?php echo $data_Surat->kecamatan ?><br><?php echo $data_Surat->kelurahan ?></b></h4>
				<h5 class="text-center text-capitalize"><b><?php echo $data_Surat->alamat ?><br>Telp. (021) 623380</b></h5>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h5 class="text-uppercase text-center"><b><u>surat keterangan domisili</u></b></h5>
				<h5 class="text-center">Nomor : <?php echo $data_Surat->id ?>/SKD/VII/<?php echo date('Y'); ?></h5>
			</div>
			<div class="col-12"><br></div>
			<div class="col-12">
				<br>
				<h5>Yang bertanda tangan dibawah ini :</h5>
			</div>
			<br>
			<div class="col-2">
				<span>Nama</span>
			</div>
			<div>
				<span>:</span>
			</div>
			<div class="col-9">
				<span><?php echo $data_Surat->nama_pejabat ?></span>
			</div>
			<br>
			<div class="col-2">
				<span>Jabatan</span>
			</div>
			<div>
				<span>:</span>
			</div>
			<div class="col-9">
				<span>Kepala Desa / Lurah <?php echo $data_Surat->kelurahan ?></span>
			</div>
			<br>
			<div class="col-2">
				<span>Alamat</span>
			</div>
			<div>
				<span>:</span>
			</div>
			<div class="col-9">
				<span><?php echo $data_Surat->alamat_pejabat ?></span>
			</div>
		</div>
	</section> 


	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url() ?>/assets/homepage/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>