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
	<div style="font-size: 10;">
		<!-- Main content -->
		<section class="invoice">
			<!-- Table row -->
			<div class="row">
				<div class="col-xs-12 table-responsive">
					<div class="col-12">
						<!-- <img src="./assets/kop_images/tester.png" style="width: 100%;"> -->
						<h4 class="text-center text-uppercase"><b>pemerintah kabupaten <?php echo $data_Surat->kabupaten ?><br>kecamatan <?php echo $data_Surat->kecamatan ?><br><?php echo $data_Surat->kelurahan ?></b></h4>
						<h5 class="text-center text-capitalize"><b><?php echo $data_Surat->alamat ?><br>Telp. (021) 623380</b></h5>
						<hr>
					</div>
					<div class="col-12"><br></div>
					<div class="col-12">
						<h5 class="text-uppercase text-center"><b><u>surat keterangan domisili</u></b></h5>
					</div>
					<div class="col-12">
						<h5 class="text-center">Nomor : <?php echo $data_Surat->id ?>/SKD/VII/<?php echo date('Y'); ?></h5>
					</div>
					<div class="col-12">
						<br>
						<h5>Yang bertanda tangan dibawah ini :</h5>
						<table class="col-12">

							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><?php echo $data_Surat->nama_pejabat ?></td>
							</tr>
							<tr>
								<td>Jabatan</td>
								<td>:</td>
								<td>Kepala Desa / Lurah <?php echo $data_Surat->kelurahan ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><span><?php echo $data_Surat->alamat_pejabat ?></span></td>
							</tr>
						</table>
						<br>
						<h5>Menerangkan bahwa :</h5>
						<table class="col-12">
							<tr>
								<td>NIK</td>
								<td>:</td>
								<td><?php echo $data_Pdf->nik ?></td>
							</tr>
							<tr>
								<td>Nama Lengkap</td>
								<td>:</td>
								<td><?php echo $data_Pdf->nama ?></td>
							</tr>
							<tr>
								<td>Tempat, Tanggal Lahir</td>
								<td>:</td>
								<td><?php echo $data_Pdf->tempat_lahir.", ".date_format($data_Pdf->tanggal_lahir,"d F Y") ?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><?php echo $data_Pdf->jenis_kelamin ?></td>
							</tr>
							<tr>
								<td>Pekerjaan</td>
								<td>:</td>
								<td><?php echo $data_Pdf->pekerjaan ?></td>
							</tr>
							<tr>
								<td>Agama</td>
								<td>:</td>
								<td><?php echo $data_Pdf->agama ?></td>
							</tr>
							<tr>
								<td>Status Perkawinan</td>
								<td>:</td>
								<td><?php echo $data_Pdf->status ?></td>
							</tr>
							<tr>
								<td>Kewarganegaraan</td>
								<td>:</td>
								<td><?php echo $data_Pdf->kewarganegaraan ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><?php echo $data_Pdf->alamat ?></td>
							</tr>
						</table>
					</div>
					<div class="col-12"><br></div>
					<div class="col-12">
						<p>Dengan ini menerangkan bahwa orang yang bersangkutan benar tinggal berdomisili di Kelurahan <?php echo $data_Surat->kelurahan ?> Kecamatan <?php echo $data_Surat->kecamatan ?> Kabupaten <?php echo $data_Surat->kabupaten ?>.</p>
						<p><?php echo $data_Surat->penutup_surat ?></p>
						<p>Lendah, <?php echo date("d F Y"); ?></p>
						<p>Kepala Desa / Lurah <?php echo $data_Surat->kelurahan ?></p>
						<br>
						<br>
						<br>
						<p><?php echo $data_Surat->nama_pejabat ?></p>
					</div>

				</div>
				<!-- /.col -->
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- ./container -->



	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url() ?>/assets/homepage/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>