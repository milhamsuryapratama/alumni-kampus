<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?=$title?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font -->
		
		
        <link rel="stylesheet" href="<?=base_url()?>assets/pages/css/normalize.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/pages/css/main.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/pages/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/pages/css/animate.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/pages/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/pages/css/style.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/pages/css/responsive.css">
        <script src="<?=base_url()?>assets/pages/js/vendor/modernizr-2.8.3.min.js"></script>
		
		
    </head>
    <body>

        <!-- Header Start -->
        <header id="home">
            
            <!-- Main Menu Start -->
            <div class="main-menu">
                <div class="navbar-wrapper">
                    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                                          
                            </div>
                            
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#visimisi">Visi Misi</a></li>
                                    <li><a href="#kegiatan">Kegiatan</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Menu End -->
            
            <!-- Sider Start -->
            <div class="slider">
                <div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators indicatior2">
                        <li data-target="#fawesome-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#fawesome-carousel" data-slide-to="1"></li>
                    </ol>
                 
                    <div class="carousel-inner" role="listbox"> 
                        <!-- <?php foreach ($kgtn as $kg) { ?>
                                <div class="item active">
                                    <img src="<?=base_url()?>assets/foto/kegiatan/<?=$kg['foto_kegiatan']?>" alt="Sider Big Image">
                                    <div class="carousel-caption">
                                        <h1 class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                                        <div class="slider-btn wow fadeIn">
                                            <a href="#" class="btn btn-learn">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>
                        <?php foreach ($kegiatan as $k) { ?>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" alt="Sider Big Image">
                                    <div class="carousel-caption">
                                        <h1 class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                                        <div class="slider-btn wow fadeIn">
                                            <a href="#" class="btn btn-learn">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?> -->
                        <div class="item active">
                            <img src="<?=base_url()?>assets/foto/kegiatan/nj.jpg" alt="Sider Big Image">
                            <!-- <div class="carousel-caption">
                                <h1 class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                                <div class="slider-btn wow fadeIn">
                                    <a href="#" class="btn btn-learn">Learn More</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="item">
                            <img src="<?=base_url()?>assets/foto/kegiatan/nj2.jpg" alt="Sider Big Image">
                            <!-- <div class="carousel-caption">
                                <h1 class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                                <div class="slider-btn wow fadeIn">
                                    <a href="#" class="btn btn-learn">Learn More</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="item">
                            <img src="<?=base_url()?>assets/foto/kegiatan/nj.jpg" alt="Sider Big Image">
                            <!-- <div class="carousel-caption">
                                <h1 class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                                <div class="slider-btn wow fadeIn">
                                    <a href="#" class="btn btn-learn">Learn More</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sider End -->
            
        </header>
        <!-- Header End -->