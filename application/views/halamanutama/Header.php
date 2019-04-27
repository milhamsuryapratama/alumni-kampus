<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?=base_url()?>assets/foto/logo/5cc25ceca1902.64px.ico" type="image/gif"> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/styles/bootstrap4/bootstrap.min.css">
<link href="<?=base_url()?>assets/homeassets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/plugins/OwlCarousel2-2.2.1/animate.css">


<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/styles/elements_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/styles/elements_responsive.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/styles/news_post_styles.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/styles/news_post_responsive.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/styles/main_styles.css">


<?php if ($title == 'Visi Misi - P4NJ JEMBER' OR $title == 'Kegiatan - P4NJ JEMBER' OR $title == 'Promosi - P4NJ JEMBER') { ?>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/styles/news_styles.css">	
<?php } ?>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homeassets/styles/responsive.css">


</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/foto/logo/logop4nj.png" alt="" style="width: 80px"></a>
					<span>P4NJ JEMBER</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="<?=base_url()?>">Home</a></li>
						<li class="main_nav_item"><a href="<?=base_url()?>pages/visi_misi">Visi Misi</a></li>
						<li class="main_nav_item"><a href="<?=base_url()?>pages/kegiatan">Kegiatan</a></li>
						<li class="main_nav_item"><a href="<?=base_url()?>pages/promosi">Promosi</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center" style="background-color: #42f46e">
			<img src="<?=base_url()?>assets/homeassets/images/phone-call.svg" alt="">
			<span>0888-307-8899</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>

	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="<?=base_url()?>">Home</a></li>
					<li class="menu_item menu_mm"><a href="<?=base_url()?>pages/visi_misi">Visi Misi</a></li>
					<li class="menu_item menu_mm"><a href="<?=base_url()?>pages/kegiatan">Kegiatan</a></li>
					<li class="menu_item menu_mm"><a href="<?=base_url()?>pages/promosi">Promosi</a></li>
				</ul>

				<!-- Menu Social -->
				
				<!-- <div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div> -->

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<?php if ($title == 'P4NJ NURUL JADID - PAITON PROBOLINGGO') { ?>
		<div class="home">

			<!-- Hero Slider -->
			<div class="hero_slider_container">
				<div class="hero_slider owl-carousel">

					<?php  
					foreach ($kegiatan as $k) { ?>
						<div class="hero_slide">
							<div class="hero_slide_background" style="background-image:url(<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>)"></div>
							<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
								<div class="hero_slide_content text-center">
									<!-- <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1> -->
								</div>
							</div>
						</div>
					<?php } ?>

				</div>

				<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
				<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
			</div>

		</div>
	<?php } else { ?>
		<div class="home">
			<div class="home_background_container prlx_parent">
				<div class="home_background prlx" style="background-image: url(http://localhost/project/assets/foto/logo/nuruljadid.png); transform: translate(0%, -15%) translate3d(0px, 0px, 0px); opacity: 0.7"></div>
			</div>
			<?php if ($title == 'Visi Misi - P4NJ JEMBER') { ?>
				<div class="home_content" style="background-color: #42f46e;">
					<h1 style="color: black">					 
						Visi Misi
					</h1>
				</div>
			<?php } elseif ($title == 'Kegiatan - P4NJ JEMBER') { ?>
				<div class="home_content" style="background-color: #42f46e;">
					<h1 style="color: black">					 
						Kegiatan
					</h1>
				</div>
			<?php } elseif ($title == 'Promosi - P4NJ JEMBER') { ?>
				<div class="home_content" style="background-color: #42f46e;">
					<h1 style="color: black">					 
						Promosi
					</h1>
				</div>
			<?php } else { ?>
				<div class="home_content" style="background-color: #42f46e;">
					<h1 style="color: black">					 
						Detail Kegiatan
					</h1>
				</div>
			<?php } ?>
			
		</div>
	<?php } ?>

	