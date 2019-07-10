<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url()?>assets/foto/logo/5cc25ceca1902.128px.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/fonts/fontawesome-5.0.8/css/fontawesome.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/pageassets/css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/jssocials/dist/jssocials.css" />
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/jssocials/dist/jssocials-theme-classic.css" />
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">

						<a href="<?=base_url()?>" class="left-topbar-item">
							Home
						</a>

						<a href="<?=base_url()?>pages/visi_misi" class="left-topbar-item">
							Visi Misi
						</a>

						<a href="<?=base_url()?>pages/kegiatan" class="left-topbar-item">
							Kegiatan
						</a>

						<a href="<?=base_url()?>pages/promosi" class="left-topbar-item">
							Promosi
						</a>

						<!-- <a href="<?=base_url()?>pages/about" class="left-topbar-item">
							About
						</a> -->
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile"><img src="<?=base_url()?>assets/foto/logo/12.png" alt="IMG-LOGO"/></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">

					<li class="left-topbar">
						<a href="<?=base_url()?>" class="left-topbar-item">
							Home
						</a>

						<a href="<?=base_url()?>pages/visi_misi" class="left-topbar-item">
							Visi Misi
						</a>

						<a href="<?=base_url()?>pages/kegiatan" class="left-topbar-item">
							Kegiatan
						</a>

						<a href="<?=base_url()?>pages/promosi" class="left-topbar-item">
							Promosi
						</a>

						<!-- <a href="<?=base_url()?>pages/about" class="left-topbar-item">
							About
						</a> -->
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="<?=base_url()?>">Home</a>						
					</li>

					<li>
						<a href="<?=base_url()?>pages/visi_misi">Visi Misi</a>
					</li>

					<li>
						<a href="<?=base_url()?>pages/kegiatan">Kegiatan </a>
					</li>

					<li>
						<a href="<?=base_url()?>pages/promosi">Promosi</a>
					</li>
				</ul>
			</div>

			<div class="wrap-logo no-banner container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/foto/logo/logop4nj.png" width="100" alt="LOGO"></a>
					<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/foto/logo/12.png" width="300" alt="LOGO"></a>
				</div>
			</div>

			<div class="wrap-main-nav">
				<div class="main-nav show-main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">						
						<a class="logo-stick" href="<?=base_url()?>">
							<img src="<?=base_url()?>assets/foto/logo/logop4nj.png" width="40" alt="LOGO">
							<img src="<?=base_url()?>assets/foto/logo/12.png" alt="LOGO">
						</a>

						<ul class="main-menu justify-content-center">
							<a href="<?=base_url()?>"><li <?php if ($this->uri->segment(2) == '') { ?>
								class="main-menu-active"
							<?php } ?>>Home</a>								
							</li>

							<li class="mega-menu-item">
								<a href="#">Lembaga</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">P4NJ</a>
										<a class="nav-link" data-toggle="pill" href="#news-1" role="tab">FKSJ</a>
										<a class="nav-link" data-toggle="pill" href="#news-2" role="tab">NJIC</a>
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" id="news-0" role="tabpanel">
											<div class="row">
												<?php 
												$kegiatan_p4nj = $this->App_model->join_dua_table_by_id_limit('tb_kegiatan','tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.id_kegiatan','tb_kegiatan.id_lembaga_alumni','2','4');

												foreach ($kegiatan_p4nj as $p) { ?>
													<div class="col-3">
														<!-- Item post -->														
														<div>
															<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
																<img src="<?=base_url()?>assets/foto/Kegiatan/<?=$p['foto_kegiatan']?>" alt="IMG">
															</a>

															<div class="p-t-10">
																<h5 class="p-b-5">
																	<a href="<?=base_url()?>kegiatan/detail/<?=$p['slug']?>" class="f1-s-5 cl3 hov-cl10 trans-03">
																		<?=$p['judul_kegiatan']?>
																	</a>
																</h5>

																<span class="cl8">
																	<a href="<?=base_url()?>kegiatan/lembaga/<?=$p['id_lembaga_alumni']?>" class="f1-s-6 cl8 hov-cl10 trans-03">
																		<?=$p['nama_lembaga']?>
																	</a>

																	<span class="f1-s-3 m-rl-3">
																		-
																	</span>

																	<span class="f1-s-3">
																		<?=date('d F Y', strtotime($p['tanggal_posting']))?>
																	</span>
																</span>
															</div>
														</div>													

													</div>
													<?php } ?>	

											</div>
										</div>

										<div class="tab-pane" id="news-1" role="tabpanel">
											<div class="row">
												<?php 
													$kegiatan_fksj = $this->App_model->join_dua_table_by_id_limit('tb_kegiatan','tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.id_kegiatan','tb_kegiatan.id_lembaga_alumni','1','4');

													foreach ($kegiatan_fksj as $f) { ?>
														<div class="col-3">
															<!-- Item post -->	
															<div>
																<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
																	<img src="<?=base_url()?>assets/foto/Kegiatan/<?=$f['foto_kegiatan']?>" alt="IMG">
																</a>

																<div class="p-t-10">
																	<h5 class="p-b-5">
																		<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
																			<?=$f['judul_kegiatan']?>
																		</a>
																	</h5>

																	<span class="cl8">
																		<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																			<?=$f['nama_lembaga']?>
																		</a>

																		<span class="f1-s-3 m-rl-3">
																			-
																		</span>

																		<span class="f1-s-3">
																			<?=date('d F Y', strtotime($f['tanggal_posting']))?>
																		</span>
																	</span>
																</div>
															</div>
														</div>
													<?php }

												?>

											</div>
										</div>

										<div class="tab-pane" id="news-2" role="tabpanel">
											<div class="row">
												<?php  
													$kegiatan_njic = $this->App_model->join_dua_table_by_id_limit('tb_kegiatan','tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.id_kegiatan','tb_kegiatan.id_lembaga_alumni','3','4');

													foreach ($kegiatan_njic as $n) { ?>
														<div class="col-3">
															<!-- Item post -->	
															<div>
																<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
																	<img src="<?=base_url()?>assets/foto/kegiatan/<?=$n['foto_kegiatan']?>" alt="IMG">
																</a>

																<div class="p-t-10">
																	<h5 class="p-b-5">
																		<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
																			<?=$n['judul_kegiatan']?>
																		</a>
																	</h5>

																	<span class="cl8">
																		<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																			<?=$n['nama_lembaga']?>
																		</a>

																		<span class="f1-s-3 m-rl-3">
																			-
																		</span>

																		<span class="f1-s-3">
																			<?=date('d F Y', strtotime($n['tanggal_posting']))?>
																		</span>
																	</span>
																</div>
															</div>
														</div>
													<?php }
												?>

											</div>
										</div>									

								</div>
							</li>

							<li <?php if ($this->uri->segment(2) == 'visi_misi') { ?>
								class="main-menu-active"
							<?php } ?>>
								<a href="<?=base_url()?>pages/visi_misi">Visi Misi </a>								
							</li>

							<li <?php if ($this->uri->segment(2) == 'kegiatan') { ?>
								class="main-menu-active"
							<?php } ?>>
								<a href="<?=base_url()?>pages/kegiatan">Kegiatan</a>
							</li>

							<li <?php if ($this->uri->segment(2) == 'promosi') { ?>
								class="main-menu-active"
							<?php } ?>>
								<a href="<?=base_url()?>pages/promosi">Promosi</a>								
							</li>

							<!-- <li class="mega-menu-item">
								<a href="category-01.html">About</a>								
							</li> -->							

						</ul>
					</nav>
				</div>
			</div>

			<div class="container">
				<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
					<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
						<span class="text-uppercase cl2 p-r-8">
							Trending Now:
						</span>

						<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">

							<?php  
								$kegiatan = $this->App_model->join_dua_table_limit('tb_kegiatan','tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.id_kegiatan','6');
								foreach ($kegiatan as $k) { ?>
									<span class="dis-inline-block slide100-txt-item animated visible-false clone fadeInDown visible-true ab-t-l fadeOutDown">
										<?=$k['judul_kegiatan']?>
									</span><span class="dis-inline-block slide100-txt-item animated visible-false clone fadeInDown visible-true">
										<?=$k['judul_kegiatan']?>
									</span>
								<?php }
							?>
						</span>
						</div>

						<form method="GET" action="<?=base_url()?>pages/kegiatan">
							<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
								<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="s" placeholder="Search">
								<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
									<i class="zmdi zmdi-search"></i>
								</button>
							</div>
						</form>
					</div>
				</div>