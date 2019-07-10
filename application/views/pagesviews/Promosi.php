<div class="container p-t-4 p-b-40">
	<h2 class="f1-l-1 cl2">
		Promosi
	</h2>
</div>

<section class="bg0 p-b-55">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-80">
				<div class="row">

					<?php foreach ($promosi as $p) { ?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
							<div class="m-b-45">
								<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
									<img src="<?=base_url()?>assets/foto/foto_usaha/<?=$p['foto_usaha']?>" alt="IMG">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="#" class="f1-m-3 cl2 hov-cl10 trans-03">
											<?=$p['nama_usaha']?> 
										</a>
									</h5>

									<span class="cl8">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											Oleh <?=$p['nama']?>
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											<?=date('d F Y', strtotime($p['tgl_akhir']))?>
										</span>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>

				<!-- Pagination -->
				<div class="flex-wr-s-c m-rl--7 p-t-15">
					<?=$halaman?>
				</div>
			</div>

			<div class="col-md-10 col-lg-4 p-b-80">
				<div class="p-l-10 p-rl-0-sr991">							
					<!-- Subscribe -->
					<!-- <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
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

					<!-- Most Popular -->
					<div class="p-b-23">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Kegiatan Terbaru
							</h3>
						</div>

						<ul class="p-t-35">
							<?php foreach ($kegiatan_side as $k) { ?>
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

					<!--  -->
					<!-- <div class="flex-c-s p-b-50">
						<a href="#">
							<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
						</a>
					</div> -->

					<!-- Tag -->
					<div>
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