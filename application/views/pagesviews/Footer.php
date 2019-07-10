<footer>
	<div class="bg2 p-t-40 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<a href="index.html">
							<img class="max-s-full" src="<?=base_url()?>assets/foto/logo/logop4nj.png" width="100" alt="LOGO">
						</a>
					</div>

					<div>
						<p class="f1-s-1 cl11 p-b-16">
							P4NJ Adalah wadah para alumni, wali santri, dan simpatisan yang bertujuan menjalin silaturahim untuk mendukung kegiatan pesantren.
						</p>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Lembaga
						</h5>
					</div>

					<ul>
						<?php $lembaga = $this->db->query("SELECT * FROM tb_lembaga_alumni ORDER BY id_lembaga_alumni DESC")->result_array(); 
							foreach ($lembaga as $l) { ?>
								<li class="flex-wr-sb-s p-b-20">

									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
												<?=$l['nama_lembaga']?>
											</a>
										</h6>
									</div>
								</li>
							<?php }
						?>							
					</ul>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Lembaga Nurul Jadid
						</h5>
					</div>

					<ul class="m-t--12">
						<?php $lembaga = $this->db->query("SELECT * FROM tb_lembaga_nj ORDER BY id_lembaga DESC")->result_array(); 
							foreach ($lembaga as $l) { ?>
								<li class="how-bor1 p-rl-5 p-tb-10">
									<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
										<?=$l['nama_lembaga']?>
									</a>
								</li>
							<?php }
						?>						
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="bg11">
		<div class="container size-h-4 flex-c-c p-tb-15">
			<span class="f1-s-1 cl0 txt-center">

				<a href="<?=base_url()?>" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> P4NJ JEMBER <i class="fa fa-heart" aria-hidden="true"></i> 
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>


<!--===============================================================================================-->	
	<script src="<?=base_url()?>assets/pageassets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/pageassets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/pageassets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>assets/pageassets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/js/jssocials/dist/jssocials.min.js"></script>
	<script src="<?=base_url()?>assets/pageassets/js/main.js"></script>

	<script>
        $("#share").jsSocials({
            shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest", "whatsapp"]
        });
    </script>

</body>
</html>