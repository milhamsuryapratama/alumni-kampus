<section class="bg0 p-b-140 p-t-10">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-30">
				<div class="p-r-10 p-r-0-sr991">
					<!-- Blog Detail -->
					<div class="p-b-70" style="text-align: justify; color: black;">

						<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
							<?=$dt['judul_kegiatan']?>
						</h3>

						<div class="flex-wr-s-s p-b-40">
							<span class="f1-s-3 cl8 m-r-15">
								<a class="f1-s-4 cl8 hov-cl10 trans-03">
									oleh <?php if ($dt['author'] == 0) {
											$ad = $this->db->query("SELECT * FROM administrator WHERE id = '1'")->row_array();
											echo $ad['username'];
										} else {
											$adm = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$dt[author]'");
											if ($adm->num_rows() > 0) {
												$ad = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$dt[author]'")->row_array();
												echo $ad['nama'];
											} else {
												$ad = $this->db->query("SELECT * FROM anggota_fks WHERE nis = '$dt[author]'")->row_array();
												echo $ad['nama'];
											}
										} ?>
								</a>

								<span class="m-rl-3">-</span>
								<a href="<?=base_url()?>kegiatan/lembaga/<?=$dt['id_lembaga_alumni']?>" class="f1-s-4 cl8 hov-cl10 trans-03">
									<?=$dt['nama_lembaga']?>
								</a>
								<span class="m-rl-3">-</span>

								<span>
									<?=date('d F Y', strtotime($dt['tanggal_posting']))?>
								</span>
							</span>

							<!-- <span class="f1-s-3 cl8 m-r-15">
								5239 Views
							</span> -->

							<!-- <a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
								0 Comment
							</a> -->
						</div>

						<div class="wrap-pic-max-w p-b-30">
							<img src="<?=base_url()?>assets/foto/kegiatan/<?=$dt['foto_kegiatan']?>" alt="IMG">
						</div>

						<p class="f1-s-11 cl6 p-b-25">
							<?=$dt['deskripsi']?>
						</p>
						<br>
						<!-- Tag -->
						<!-- <div class="flex-s-s p-t-12 p-b-15">
							<span class="f1-s-12 cl5 m-r-8">
								Tags:
							</span>

							<div class="flex-wr-s-s size-w-0">
								<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
									Streetstyle
								</a>

								<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
									Crafts
								</a>
							</div>
						</div> -->

						<!-- Share -->
						<div class="flex-s-s">
							<span class="f1-s-12 cl5 p-t-1 m-r-15">
								Share:
							</span>

							<div class="flex-wr-s-s size-w-0" id="share">
								
							</div>
						</div>
					</div>

					<!-- Leave a comment -->
					<!-- <div>
						<h4 class="f1-l-4 cl3 p-b-12">
							Leave a Comment
						</h4>

						<p class="f1-s-13 cl8 p-b-40">
							Your email address will not be published. Required fields are marked *
						</p>

						<form>
							<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="msg" placeholder="Comment..."></textarea>

							<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">

							<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">

							<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="website" placeholder="Website">

							<button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
								Post Comment
							</button>
						</form>
					</div> -->
				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-md-10 col-lg-4 p-b-30">
				<div class="p-l-10 p-rl-0-sr991 p-t-70">	

					<!-- Popular Posts -->
					<div class="p-b-30">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Kegiatan Terbaru
							</h3>
						</div>

						<ul class="p-t-35">
							<?php foreach ($kegiatan as $k) { ?>
								<li class="flex-wr-sb-s p-b-30">
									<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="f1-s-5 cl3 hov-cl10 trans-03">
												<?=$k['judul_kegiatan']?>
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="<?=base_url()?>kegiatan/lembaga/<?=$k['id_lembaga_alumni']?>" class="f1-s-6 cl8 hov-cl10 trans-03">
												<?=$k['nama_lembaga']?>
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												<?=date('d F Y', strtotime($k['tanggal_posting']))?>
											</span>
										</span>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>