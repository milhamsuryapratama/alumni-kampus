        <!-- footer -->
        
        <footer>
            <div class="container">
                <div class="row">
                
                    <!-- Single Footer -->
                    <div class="col-sm-6">
                        <div class="single-footer">
                            <div class="footer-logo">
                                <p>Sebelum bernama Karanganyar, desa tempat Pondok Pesantren Nurul Jadid berdiri dikenal dengan nama Tanjung. Nama ini diambil dari sebuah pohon besar bernama Tanjung.</p> 
                                <p>Sejak zaman dulu, pohon besar, Tanjung, berdiri tegak di tengah-tengah desa. Kemudian, masyarakat setempat juga menganggap pohon tersebut mempunyai kelebihan dan keistimewaan. Tak heran, nama Tanjung kemudian diabadikan sebagai nama desa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer -->
                    
                    
                    <!-- Single Footer -->
                    <div class="col-sm-6" style="text-align: right;">
                        <div class="single-footer">
                            <h4>Pondok Pesantren Nurul Jadid</h4>
                            <p>PO. BOX 1 Paiton Probolinggo 67291<br />
                            0888-307-7077 (Kantor Pesantren Nurul Jadid) <br />
                            sekretariat.nj@gmail.com <br />
                            (0335) 774121</p>
                        </div>
                    </div>
                    <!-- Single Footer -->

                </div>
            </div>
            
        </footer>
        
        <!-- Copyright -->
        <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copy-text">
                                <p>All Rights Reserved | Copyright 2019 © <br>  created by <strong>Nurul Jadid</strong></p>
                            </div>
                        </div>
                        <div class="col-sm-6" style="text-align: right;">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- footer -->


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?=base_url()?>assets/pages/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="<?=base_url()?>assets/pages/js/plugins.js"></script>
        <script src="<?=base_url()?>assets/pages/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/pages/js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="<?=base_url()?>assets/pages/js/paralax.js"></script>
        <script src="<?=base_url()?>assets/pages/js/jquery.smooth-scroll.js"></script>
        <script src="<?=base_url()?>assets/pages/js/jquery.sticky.js"></script>
        <script src="<?=base_url()?>assets/pages/js/wow.min.js"></script>
        <script src="<?=base_url()?>assets/pages/js/main.js"></script>
        
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						 'scrollTop': $target.offset().top
					}, 900, 'swing');
					});
			});
		</script>
		
		<script src="<?=base_url()?>assets/pages/js/custom.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>