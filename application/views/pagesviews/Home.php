<section class="bg0">
	<div class="container">
		<div class="row m-rl--1">

			<?php foreach ($kegiatan as $k) { ?>
				<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url(<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>);">
						<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
							<a href="<?=base_url()?>kegiatan/lembaga/<?=$k['id_lembaga_alumni']?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								<?=$k['nama_lembaga']?>
							</a>

							<h3 class="how1-child2 m-t-10">
								<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="f1-m-1 cl0 hov-cl10 trans-03">
									<?=$k['judul_kegiatan']?>
								</a>
							</h3>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>

<section class="bg0 p-t-70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">
				<div class="p-b-20">
					<!-- Entertainment  -->
					<div class="p-b-20">
						<div class="how2 how2-cl1 flex-sb-c m-r-10 m-r-0-sr991">
							<h3 class="f1-m-2 cl12 tab01-title">
								P4NJ
							</h3>


							<a href="<?=base_url()?>kegiatan/lembaga/2" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
								View all
								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
							</a>
						</div>

						<div class="row p-t-35">

							<?php 
							if (count($kegiatan_p4nj) > 0) { 
								for ($i=1; $i < count($kegiatan_p4nj); $i++) { ?>
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_p4nj[$i]['slug']?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>assets/foto/kegiatan/<?=$kegiatan_p4nj[$i]['foto_kegiatan']?>" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_p4nj[$i]['slug']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?=$kegiatan_p4nj[$i]['judul_kegiatan']?>
													</a>
												</h5>

												<span class="cl8">
													<a href="<?=base_url()?>kegiatan/lembaga/<?=$k['id_lembaga_alumni']?>" class="f1-s-4 cl8 hov-cl10 trans-03">
														<?=$kegiatan_p4nj[$i]['nama_lembaga']?>
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('d F Y', strtotime($kegiatan_p4nj[$i]['tanggal_posting']))?>
													</span>
												</span>
											</div>
										</div>
									</div>
								<?php } ?>
							<?php } else {
								echo "Tidak Ada Kegiatan";
							}?>
							

							<div class="col-sm-6 p-r-25 p-r-15-sr991">
								<!-- Item post -->	
								<?php 
								if (count($kegiatan_p4nj) > 0) {
									for ($i=1; $i < count($kegiatan_p4nj); $i++) { ?>
										<div class="flex-wr-sb-s m-b-30">
											<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_p4nj[$i]['slug']?>" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>assets/foto/kegiatan/<?=$kegiatan_p4nj[$i]['foto_kegiatan']?>" alt="IMGDonec metus orci, malesuada et lectus vitae">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_p4nj[$i]['slug']?>" class="f1-s-5 cl3 hov-cl10 trans-03">
														<?=$kegiatan_p4nj[$i]['judul_kegiatan']?>
													</a>
												</h5>

												<span class="cl8">
													<a href="<?=base_url()?>kegiatan/lembaga/<?=$kegiatan_p4nj[$i]['id_lembaga_alumni']?>" class="f1-s-6 cl8 hov-cl10 trans-03">
														<?=$kegiatan_p4nj[$i]['nama_lembaga']?>
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('d F Y', strtotime($kegiatan_p4nj[$i]['tanggal_posting']))?>
													</span>
												</span>
											</div>
										</div>
									<?php } 
								} else {
									echo "";
								} ?>
								
							</div>
						</div>
					</div>					
				</div>

				<div class="p-b-20">
					<!-- Entertainment  -->
					<div class="p-b-20">
						<div class="how2 how2-cl2 flex-sb-c m-b-35">
							<h3 class="f1-m-2 cl13 tab01-title">
								FKSJ
							</h3>


							<a href="<?=base_url()?>kegiatan/lembaga/1" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
								View all
								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
							</a>
						</div>

						<div class="row p-t-35">

							<?php 
							if (count($kegiatan_fksj) > 0) {
								for ($i=0; $i < 1; $i++) { ?>
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_fksj[$i]['slug']?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>assets/foto/kegiatan/<?=$kegiatan_fksj[$i]['foto_kegiatan']?>" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_fksj[$i]['slug']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?=$kegiatan_fksj[$i]['judul_kegiatan']?>
													</a>
												</h5>

												<span class="cl8">
													<a href="<?=base_url()?>kegiatan/lembaga/<?=$kegiatan_fksj[$i]['id_lembaga_alumni']?>" class="f1-s-4 cl8 hov-cl10 trans-03">
														<?=$kegiatan_fksj[$i]['nama_lembaga']?>
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('d F Y', strtotime($kegiatan_fksj[$i]['tanggal_posting']))?>
													</span>
												</span>
											</div>
										</div>
									</div>
								<?php }
							} else {
								echo "Kegiatan Tidak Ada";
							} ?>
							

							<div class="col-sm-6 p-r-25 p-r-15-sr991">
								<!-- Item post -->	
								<?php 
								if (count($kegiatan_fksj) > 0) {
									for ($i=1; $i < count($kegiatan_fksj); $i++) { ?>
										<div class="flex-wr-sb-s m-b-30">
											<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_fksj[$i]['slug']?>" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>assets/foto/kegiatan/<?=$kegiatan_fksj[$i]['foto_kegiatan']?>" alt="IMGDonec metus orci, malesuada et lectus vitae">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_fksj[$i]['slug']?>" class="f1-s-5 cl3 hov-cl10 trans-03">
														<?=$kegiatan_fksj[$i]['judul_kegiatan']?>
													</a>
												</h5>

												<span class="cl8">
													<a href="<?=base_url()?>kegiatan/lembaga/<?=$kegiatan_fksj[$i]['id_lembaga_alumni']?>" class="f1-s-6 cl8 hov-cl10 trans-03">
														<?=$kegiatan_fksj[$i]['nama_lembaga']?>
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('d F Y', strtotime($kegiatan_fksj[$i]['tanggal_posting']))?>
													</span>
												</span>
											</div>
										</div>
									<?php } 
								} else {
									echo "";
								} ?>
								
							</div>
						</div>
					</div>					
				</div>

				<div class="p-b-20">
					<!-- Entertainment  -->
					<div class="p-b-20">
						<div class="how2 how2-cl6 flex-sb-c m-b-35">
							<h3 class="f1-m-2 cl18 tab01-title">
								NJIC
							</h3>


							<a href="<?=base_url()?>kegiatan/lembaga/3" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
								View all
								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
							</a>
						</div>

						<div class="row p-t-35">

							<?php 
							if (count($kegiatan_njic) > 0) {
								for ($i=0; $i < 1; $i++) { ?>
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_njic[$i]['slug']?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>assets/foto/kegiatan/<?=$kegiatan_njic[$i]['foto_kegiatan']?>" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_njic[$i]['slug']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?=$kegiatan_njic[$i]['judul_kegiatan']?>
													</a>
												</h5>

												<span class="cl8">
													<a href="<?=base_url()?>kegiatan/lembaga/<?=$kegiatan_njic[$i]['id_lembaga_alumni']?>" class="f1-s-4 cl8 hov-cl10 trans-03">
														<?=$kegiatan_njic[$i]['nama_lembaga']?>
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('d F Y', strtotime($kegiatan_njic[$i]['tanggal_posting']))?>
													</span>
												</span>
											</div>
										</div>
									</div>
								<?php }
							} else {
								echo "Kegiatan Tidak Ada";
							} ?>
							

							<div class="col-sm-6 p-r-25 p-r-15-sr991">
								<!-- Item post -->	
								<?php 
								if (count($kegiatan_njic) > 0) {
									for ($i=1; $i < count($kegiatan_njic); $i++) { ?>
										<div class="flex-wr-sb-s m-b-30">
											<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_njic[$i]['slug']?>" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>assets/foto/kegiatan/<?=$kegiatan_njic[$i]['foto_kegiatan']?>" alt="IMGDonec metus orci, malesuada et lectus vitae">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan_njic[$i]['slug']?>" class="f1-s-5 cl3 hov-cl10 trans-03">
														<?=$kegiatan_njic[$i]['judul_kegiatan']?>
													</a>
												</h5>

												<span class="cl8">
													<a href="<?=base_url()?>kegiatan/lembaga/<?=$kegiatan_njic[$i]['id_lembaga_alumni']?>" class="f1-s-6 cl8 hov-cl10 trans-03">
														<?=$kegiatan_njic[$i]['nama_lembaga']?>
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('d F Y', strtotime($kegiatan_njic[$i]['tanggal_posting']))?>
													</span>
												</span>
											</div>
										</div>
									<?php } 
								} else {
									echo "";
								} ?>
								
							</div>
						</div>
					</div>					
				</div>

			</div>

			<div class="col-md-10 col-lg-4">
				<div class="p-l-10 p-rl-0-sr991 p-b-20">
					<!-- Stay Connected -->
					<!-- <div class="p-b-35">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Stay Connected
							</h3>
						</div>

						<ul class="p-t-35">
							<li class="flex-wr-sb-c p-b-20">
								<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
									<span class="fab fa-facebook-f"></span>
								</a>

								<div class="size-w-3 flex-wr-sb-c">
									<span class="f1-s-8 cl3 p-r-20">
										6879 Fans
									</span>

									<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
										Like
									</a>
								</div>
							</li>

							<li class="flex-wr-sb-c p-b-20">
								<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
									<span class="fab fa-twitter"></span>
								</a>

								<div class="size-w-3 flex-wr-sb-c">
									<span class="f1-s-8 cl3 p-r-20">
										568 Followers
									</span>

									<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
										Follow
									</a>
								</div>
							</li>

							<li class="flex-wr-sb-c p-b-20">
								<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
									<span class="fab fa-youtube"></span>
								</a>

								<div class="size-w-3 flex-wr-sb-c">
									<span class="f1-s-8 cl3 p-r-20">
										5039 Subscribers
									</span>

									<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
										Subscribe
									</a>
								</div>
							</li>
						</ul>
					</div> -->

					<!-- Most Popular -->
					<div class="p-b-30">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Kegiatan Terbaru
							</h3>
						</div>

						<ul class="p-t-35">

							<?php foreach ($kegiatan as $k) { ?>
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										>
									</div>

									<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										<?=$k['judul_kegiatan']?>
									</a>
								</li>
							<?php } ?>

						</ul>
					</div>

					<!-- Subscribe -->
					<!-- <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
						<h5 class="f1-m-5 cl0 p-b-10">
							Subscribe
						</h5>

						<p class="f1-s-1 cl0 p-b-25">
							Get all latest content delivered to your email a few times a month.
						</p>

						<form class="size-a-9 pos-relative">
							<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

							<button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
								<i class="fa fa-arrow-right"></i>
							</button>
						</form>
					</div> -->

					<!-- Tag -->
					<div class="p-b-55">
						<div class="how2 how2-cl4 flex-s-c m-b-30">
							<h3 class="f1-m-2 cl3 tab01-title">
								Lembaga Kami
							</h3>
						</div>

						<div class="flex-wr-s-s m-rl--5">
							<?php foreach ($lembaga_nj as $l) { ?>
								<a href="<?=$l['situs']?>" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									<?=$l['nama_lembaga']?>
								</a>
							<?php } ?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>