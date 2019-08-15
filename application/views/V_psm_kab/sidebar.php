		<!--  sidebar -->
		<aside class="main-sidebar" >
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image" >
						<img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info" style="padding:5px;">
						<p class="font">Bachtiar Hidayatullah</p>
						<a href="#"><i class="fa fa-circle text-success"></i> PSM KAB</a>
					</div>
				</div>
				<ul class="sidebar-menu font" data-widget="tree">
					<li class="treeview">
						<a href="#">
							<i class="fa fa-pie-chart"></i>
							<span class="font">Kelola Pendaftaran</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu ">
							<li class="active"><a style="font-family: 'Montserrat';" href="<?php echo site_url() ?>/C_psm_kab/calon_siswa"><i class="fa fa-circle-o"></i> Calon
									Siswa</a></li>
							<li class="active"><a href="<?php echo site_url() ?>/C_psm_kab/pertanyaan"><i class="fa fa-circle-o"></i>
									Pertanyaan</a></li>
							<li class="active"><a href="<?php echo site_url() ?>/C_psm_kab/upload_berkas"><i class="fa fa-circle-o"></i> Upload
									Berkas</a></li>
						</ul>
					</li>
					<li><a href="<?php echo site_url() ?>/C_psm_kab/lihat_kriteria"><i class="fa fa-book"></i> <span class="font"> 
								Kriteria</span></a></li>
					<li><a href="<?php echo site_url() ?>/C_psm_kab/penilaian"><i class="fa fa-book"></i> <span class="font"> Kelola
								Penilaian</span></a></li>
					<li class="treeview font">
						<a href="#">
							<i class="fa fa-pie-chart"></i>
							<span>Laporan Hasil</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="active"><a href="<?php echo site_url() ?>/C_psm_kab/hasil_analisa"><i class="fa fa-circle-o"></i>
									Perhitungan & Analisa</a></li>
							<li class="active"><a href="<?php echo site_url() ?>/C_psm_kab/laporan_pernyataan"><i class="fa fa-circle-o"></i> Surat
									Pernyataan</a></li>

						</ul>
					</li>

					<li class="treeview font">
						<a href="#">
							<i class="fa fa-pie-chart"></i>
							<span>Pengumuman</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="active"><a href="<?php echo site_url() ?>/C_psm_kab/v_pengumuman"><i class="fa fa-circle-o"></i>
									Surat pemanggilan & data siswa</a></li>
									
						</ul>
					</li>

				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<!-- akhir sidebar -->
