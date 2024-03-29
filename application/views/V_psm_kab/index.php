<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Panel Admin</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/morris.js/morris.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button);

	</script>


<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?php echo site_url() ?>/C_psm_kab/index" class="logo">
				<span class="logo-mini"><b>M</b>IN </span>
				<span class="logo-lg font"><b>DASHBOARD</b></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image"
									alt="User Image">
								<span class="hidden-xs font">Bachtiar Hidayatullah</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg"
										class="img-circle" alt="User Image">
									<p class="font" style="color:white;">
										Bachtiar Hidayatullah - PSM KAB
										<small>2019</small>
									</p>
								</li>
								<li class="user-footer">
									<div class="pull-right">
										<a href="#" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="wrapper">
			<?php $this->load->view($contents); ?>
		</div>
	</div>

	<div class="content-wraper">
		<?php $this->load->view('v_psm_kab/sidebar'); ?>
	</div>
	
	<div class="content-wraper">
		<?php $this->load->view('v_psm_kab/footer'); ?>
	</div>

	<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/morris.js/morris.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script
		src="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
	</script>
	<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
	<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
	<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
	<!-- CK Editor -->
	<script src="<?php echo base_url()?>assets/bower_components/ckeditor/ckeditor.js"></script>

	<script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor1')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5()
		})

	</script>

	<script>
		//Date picker
		$('#datepicker').datepicker({
			autoclose: true
		})

	</script>
	</head>

</body>

</html>
