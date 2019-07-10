<div class="container p-t-4 p-b-40">
	<h2 class="f1-l-1 cl2">
		Kegiatan
	</h2>
</div>

<section class="bg0">
	<div class="container">
		<div class="row m-rl--1">

			<?php for ($i=0; $i < 1; $i++) { ?>
				<div class="col-12 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(<?=base_url()?>assets/foto/kegiatan/<?=$kegiatan[$i]['foto_kegiatan']?>);">
						<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan[$i]['slug']?>" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="<?=base_url()?>kegiatan/lembaga/<?=$kegiatan[$i]['id_lembaga_alumni']?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								<?=$kegiatan[$i]['nama_lembaga']?>
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan[$i]['slug']?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
									<?=$kegiatan[$i]['judul_kegiatan']?>
								</a>
							</h3>
						</div>
					</div>
				</div>
			<?php } ?>			

			<?php for ($i=1; $i <= 4; $i++) { ?>
				<div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-14 how1 pos-relative" style="background-image: url(<?=base_url()?>assets/foto/kegiatan/<?=$kegiatan[$i]['foto_kegiatan']?>);">
						<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan[$i]['slug']?>" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="<?=base_url()?>kegiatan/lembaga/<?=$kegiatan[$i]['id_lembaga_alumni']?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								<?=$kegiatan[$i]['nama_lembaga']?>
							</a>

							<h3 class="how1-child2 m-t-14">
								<a href="<?=base_url()?>kegiatan/detail/<?=$kegiatan[$i]['slug']?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
									<?=$kegiatan[$i]['judul_kegiatan']?>
								</a>
							</h3>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>

<section class="bg0 p-t-70 p-b-55">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-80">
				<div class="row">
					<?php foreach ($kegiatan_cari as $k) { ?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
							<div class="m-b-45">
								<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="wrap-pic-w hov1 trans-03">
									<img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" alt="IMG">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
											<?=$k['judul_kegiatan']?>
										</a>
									</h5>

									<span class="cl8">
										<a href="<?=base_url()?>kegiatan/lembaga/<?=$k['id_lembaga_alumni']?>" class="f1-s-4 cl8 hov-cl10 trans-03">
											Lembaga <?=$k['nama_lembaga']?>
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											<?=date('d F Y', strtotime($k['tanggal_posting']))?>
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