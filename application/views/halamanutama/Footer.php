<!-- Footer -->

	<footer class="footer" style="background-color: #42f46e;">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="<?=base_url()?>assets/foto/logo/logop4nj.png" alt="" width="100">
								<span>P4NJ</span>
							</div>
						</div>

						<p class="footer_about_text" style="color: black; text-align: justify;">Adalah wadah para alumni, wali santri, dan simpatisan yang bertujuan menjalin silaturahim untuk mendukung kegiatan pesantren.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="<?=base_url()?>" style="color: black">Home</a></li>
								<li class="footer_list_item"><a href="<?=base_url()?>pages/visi_misi" style="color: black">Visi Misi</a></li>
								<li class="footer_list_item"><a href="<?=base_url()?>pages/kegiatan" style="color: black">Kegiatan</a></li>
								<li class="footer_list_item"><a href="<?=base_url()?>pages/promosi" style="color: black">Promosi</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Lembaga Lain</div>
						<div class="footer_column_content">
							<?php  
							$lembaga_nj = $this->App_model->ambil_data('tb_lembaga_nj','id_lembaga');
							?>
							<ul>
								<?php foreach ($lembaga_nj as $l) { ?>
									<li class="footer_list_item"><a href="<?=$l['situs']?>" style="color: black"><?=$l['nama_lembaga']?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<!-- <li class="footer_contact_item" style="color: black">
									<div class="footer_contact_icon">
										<img src="<?=base_url()?>assets/homeassets/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Arévalo
								</li> -->
								<li class="footer_contact_item" style="color: black">
									<div class="footer_contact_icon">
										<img src="<?=base_url()?>assets/homeassets/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0888-307-8899
								</li>
								<li class="footer_contact_item" style="color: black">
									<div class="footer_contact_icon">
										<img src="<?=base_url()?>assets/homeassets/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>sekretariat.nj@gmail.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center" style="color: black">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | FROM <i class="fa fa-heart" aria-hidden="true"></i> <a href="<?=base_url()?>">P4NJ JEMBER</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="<?=base_url()?>assets/homeassets/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>assets/homeassets/styles/bootstrap4/popper.js"></script>
<script src="<?=base_url()?>assets/homeassets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/homeassets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?=base_url()?>assets/homeassets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?=base_url()?>assets/homeassets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?=base_url()?>assets/homeassets/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?=base_url()?>assets/homeassets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?=base_url()?>assets/homeassets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=base_url()?>assets/homeassets/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="<?=base_url()?>assets/homeassets/plugins/easing/easing.js"></script>
<script src="<?=base_url()?>assets/homeassets/js/custom.js"></script>

</body>
</html>