<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><?=$title?></title>
<link rel="icon" href="<?=base_url()?>assets/foto/logo/5cc25ceca1902.64px.ico" type="image/gif"> 
<link href="<?=base_url()?>assets/homepages/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="<?=base_url()?>assets/homepages/js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="<?=base_url()?>assets/homepages/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?=base_url()?>assets/homepages/js/jquery.min.js"></script>
 <script src="<?=base_url()?>assets/homepages/js/bootstrap.js"></script>

</head>
<body>
<!-- banner -->
<script src="<?=base_url()?>assets/homepages/js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>  

<?php if ($title == 'P4NJ NURUL JADID - PAITON PROBOLINGGO') { ?>
	<div class="banner" style="background-image: url(https://1.bp.blogspot.com/-VqalcalN6K0/WOiWJywFhFI/AAAAAAAABDE/QwVJlztTKSEIPBAGmVE2vAzq-s2sZ8s8QCLcB/s1600/jadi2.png); ">	  
	 <div class="header">
			 <div class="logo">
				 <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/foto/logo/p4nj.jpg" width="200" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="<?=base_url()?>">Home</a></li>
					 <li><a href="<?=base_url()?>pages/visi_misi">Visi Misi</a></li>
					 <li><a href="<?=base_url()?>pages/kegiatan">Kegiatan</a></li>
					 <li><a href="<?=base_url()?>pages/promosi">Promosi</a></li>
					 <!-- <li><a href="contact.html">Contact</a></li> -->
				 </ul>
			 </div>
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->

			 <div class="clearfix"></div>
	 </div>
	 <div class="slider">
		 <div class="caption">
			 <div class="container">
				  <div class="callbacks_container">
					  <ul class="rslides" id="slider">
						    <li>
						    	<img src="https://www.nuruljadid.net/wp-content/uploads/2015/05/20170129_biografi-kh.-zaini-mun-im.png" width="200">
						    	<h2 style="color: black; font-weight: bold;">"Orang yang hidup di Indonesia kemudian tidak melakukan perjuangan, dia telah berbuat maksiat. Orang yang memikirkan masalah pendidikannya sendiri, maka orang itu telah berbuat maksiat."</h2>
						    	<h2 style="color: black; font-weight: bold;">KH. ZAINI MUN`IM</h2>
						    </li>
							<li>
								<img src="https://www.nuruljadid.net/wp-content/uploads/2015/05/20170129_biografi-kh.-hasyim-zaini.png" width="200">
								<h2 style="color: black; font-weight: bold;">"Jadilah orang yang berguna tanpa harus menonjolkan diri."</h2>
								<h2 style="color: black; font-weight: bold;">KH. MOH. HASYIM ZAINI</h2>
							</li>									
					  </ul>	
						<div class="clearfix"></div>
				  </div>
			  </div>
		  </div>
	  </div>
	  <!-- <div class="banner-grids">
		  <div class="container">
			 <div class="col-md-4 banner-grid">
				 <h3>Blog Feed</h3>
				 <div class="banner-grid-sec">
					 <div class="grid_info">
						 <div class="blg-pic">
							 <img src="<?=base_url()?>assets/homepages/images/m1.jpg" class="img-responsive" alt="">
						 </div>
						 <div class="blg-pic-info">
							 <h4><a href="#">Vivamus tempus ligula</a></h4>
							 <p>Aliquam sem velit, rhoncus sed arcu at curabitur et erat eu viverra.</p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="grid_info">
						 <div class="blg-pic">
							 <img src="<?=base_url()?>assets/homepages/images/m2.jpg" class="img-responsive" alt="">
						 </div>
						 <div class="blg-pic-info">
							 <h4><a href="#">Vivamus tempus ligula</a></h4>
							 <p>Aliquam sem velit, rhoncus sed arcu at curabitur et erat eu viverra.</p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="more">
						 <a href="blog.html">See more from the Blog ></a>
					 </div>
				 </div>
			 </div>
			 <div class="col-md-4 banner-grid">
				 <h3>News Feed</h3>
				 <div class="banner-grid-sec">
					 <div class="news-grid">
						 <h4><a href="#">Vivamus tempus ligula</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
					 </div>
					 <div class="news-grid">
						 <h4><a href="#">Vivamus tempus ligula</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
					 </div>
					 <div class="news-grid">
						 <h4><a href="#">Vivamus tempus ligula</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
					 </div>
					 <div class="news-grid">
						 <h4><a href="#">Vivamus tempus ligula</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
					 </div>
				 </div>
			 </div>
			 <div class="col-md-4 banner-grid">
				 <h3>News Letter</h3>
				 <div class="banner-grid-sec news_sec">
					 <div class="news-ltr">
						 <h4><a href="#">Pellentesque sed arcu lacinia</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra. Suspendisse lacus posuere ultricies turpis.</p>
					 </div>
					 <form>
						 <input type="text" placeholder="Email Address*" required="">
						 <input type="submit" value="SEND">
					 </form>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		  </div>
	  </div> -->
</div>
<?php } else { ?>
	<div class="banner2">	  
		<div class="header">
			<div class="logo">
				 <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/foto/logo/p4nj.jpg" width="200" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="<?=base_url()?>">Home</a></li>
					 <li><a href="<?=base_url()?>pages/visi_misi">Visi Misi</a></li>
					 <li><a href="<?=base_url()?>pages/kegiatan">Kegiatan</a></li>
					 <li><a href="<?=base_url()?>pages/promosi">Promosi</a></li>
					 <!-- <li><a href="contact.html">Contact</a></li> -->
				 </ul>
			 </div>
			<!-- script-for-menu -->
			<script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
			</script>
			<!-- script-for-menu -->
			<div class="clearfix"></div>
		</div>	  
	</div>
<?php } ?>