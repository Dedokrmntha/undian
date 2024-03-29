<html>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

<!-- bootstrap 3.0.2 -->
<link href="<?php echo config_item('base_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- font Awesome -->
<link href="<?php echo config_item('base_url') ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="<?php echo config_item('base_url') ?>/assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo config_item('base_url') ?>/assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo config_item('base_url') ?>/assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo config_item('base_url') ?>/assets/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
<!-- fullCalendar -->
<!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
<!-- Daterange picker -->
<link href="<?php echo config_item('base_url') ?>/assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<!-- iCheck for checkboxes and radio inputs -->
<link href="<?php echo config_item('base_url') ?>/assets/css/iCheck/all.css" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
<link href='<?php echo config_item('base_url') ?>/assets/css/font-lato.css' rel='stylesheet' type='text/css'>
<!-- Theme style -->

<link type="text/css" href='<?php echo config_item('base_url') ?>/assets/css/jquery.dataTables.min.css' rel='stylesheet'>
<link type="text/css" href='<?php echo config_item('base_url') ?>/assets/css/responsive.dataTables.min.css' rel='stylesheet'>
<link type="text/css" href='<?php echo config_item('base_url') ?>/assets/css/buttons.dataTables.min.css' rel='stylesheet'>

<link href="<?php echo config_item('base_url') ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo config_item('base_url') ?>/assets/datatable/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="<?php echo config_item('base_url') ?>/assets/datatable/js/jquery.js">
</script>
<script type="text/javascript" charset="utf8" src="<?php echo config_item('base_url') ?>/assets/datatable/js/jquery.dataTables.min.js"></script>

<script src="<?php echo config_item('base_url') ?>/assets/js/jquery-1.12.4.js"></script>
<script src="<?php echo config_item('base_url') ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo config_item('base_url') ?>/assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo config_item('base_url') ?>/assets/js/dataTables.buttons.min.js"></script>
<script src="<?php echo config_item('base_url') ?>/assets/js/buttons.colVis.min.js"></script>

<script type="text/javascript">
	// setTimeout(function undi(){window.location.reload(3);},0.5);
</script>

<body>
	<center>
		<h1 style="font-size: 40px; font-weight: bold; font-family: 'Sofia', sans-serif;">DOORPRIZE</h1>
	</center>



	<center><img src="<?= base_url('assets/gambar/angkasa.jpg') ?>" alt="logo" />
		<center>

			<div style="margin-bottom: 30px;">
				<a href="<?php echo site_url() . 'Input/showdata' ?>" class="btn btn-sm btn-primary" style="font-size: 20px;">Klik Untuk Undi</a>&nbsp&nbsp
				<!-- <a href="<?php echo site_url() . 'Input/stop' ?>" class="btn btn-sm btn-danger">Stop</a> -->
			</div>
			<center>
				<h1 style="font-size: 20px; font-weight: bold; font-family: 'Sofia', sans-serif;">*PEMENANG UNDIAN*</h1>
			</center>

			<?php if ($hasil->num_rows() > 0) : ?>
				<table align="center" id="example" border="5" class="table table-info table-bordered display responsive nowrap" style="width:50%">
					<thead>
						<tr>
							<th>Nomor Undian</th>
							<th>Nama</th>
							<th>Unit</th>
							<th>Keterangan Hadiah</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($hasil->result_array() as $i) : ?>
							<tr>
								<td><?php echo $i['nomor']; ?></td>
								<td><?php echo $i['nama']; ?></td>
								<td><?php echo $i['unit']; ?></td>
								<td><?php echo $i['keterangan']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php else : ?>
				<h4>Pemenang Undian Belum Ditentukan</h4>
			<?php endif; ?>




</body>

</html>