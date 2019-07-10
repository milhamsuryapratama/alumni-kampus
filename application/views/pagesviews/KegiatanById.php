<div class="container p-t-4 p-b-40">
	<h2 class="f1-l-1 cl2">
		Kegiatan
		<?php 
		$id = $this->uri->segment(3);
		$query = $this->db->query("SELECT nama_lembaga FROM tb_lembaga_alumni WHERE id_lembaga_alumni = '$id' ")->row_array();
		echo $query['nama_lembaga'];
		?>
	</h2>
</div>

<section class="bg0 p-b-55">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-80">
				<div class="p-r-10 p-r-0-sr991">
					<div class="m-t--40 p-b-40">
						<!-- Item post -->
						<?php foreach ($kegiatan_id as $k) { 
							if ($k['author'] == 0) {
								$ad = $this->db->query("SELECT * FROM administrator WHERE id = '1'")->row_array();
							} else {
								$ad = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$k[author]'")->row_array();
							}
							?>
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25" style="text-align: justify;">
									<h5 class="p-b-12">
										<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											<?=$k['judul_kegiatan']?>
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a class="f1-s-4 cl8 hov-cl10 trans-03">
											Oleh <?php 
													if ($k['author'] == 0) {
														echo $ad['username'];
													} else {
														$adm = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$k[author]'");
														if ($adm->num_rows() > 0) {
															$ad = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$k[author]'")->row_array();
															echo $ad['nama'];
														} else {
															$ad = $this->db->query("SELECT * FROM anggota_fks WHERE nis = '$k[author]'")->row_array();
															echo $ad['nama'];
														}
													}
												?>												
										</a>

										<a href="<?=base_url()?>kegiatan/lembaga/<?=$k['id_lembaga_alumni']?>" class="f1-s-4 cl8 hov-cl10 trans-03">
											- <?=$k['nama_lembaga']?>
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											<?=date('d F Y', strtotime($k['tanggal_posting']))?>
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										<?=substr($k['deskripsi'],0,300). '. . .'?>
									</p>
									<br>
									<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>
						<?php } ?>
					</div>

					<div class="flex-wr-s-c m-rl--7 p-t-15">
						<?=$halaman?>
					</div>
				</div>
			</div>

			<div class="col-md-10 col-lg-4 p-b-80">
				<div class="p-l-10 p-rl-0-sr991">							
					<!-- Subscribe -->
					<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
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
					</div>

					<!-- Most Popular -->
					<div class="p-b-23">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Kegiatan Terakhir
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

					<!-- Tag -->
					<div>
						<div class="how2 how2-cl4 flex-s-c m-b-30">
							<h3 class="f1-m-2 cl3 tab01-title">
								Tags
							</h3>
						</div>

						<div class="flex-wr-s-s m-rl--5">
							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Fashion
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Lifestyle
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Denim
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Streetstyle
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Crafts
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Magazine
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								News
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Blogs
							</a>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>