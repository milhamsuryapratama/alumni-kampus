<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Post Column -->

				<div class="col-lg-8">
					
					<div class="news_post_container">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?=base_url()?>assets/foto/kegiatan/<?=$dt['foto_kegiatan']?>" alt="">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center" style="background-color: #004727">
										<div><?=substr($dt['tanggal_posting'],8,2)?></div>
										<div><?=date('F', strtotime($dt['tanggal_posting']))?></div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<h1 style="color: black"><?=$dt['judul_kegiatan']?></h1>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Oleh <?php if ($dt['author'] == 0) {
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
										} ?></span>
										<span>|</span>
										<span class="news_post_comments">Lembaga <a href="<?=base_url()?>kegiatan/lembaga/<?=$dt['id_lembaga_alumni']?>"> <?=$dt['nama_lembaga']?></a></span>
										<span>|</span>
										<span class="news_post_comments">Pada <?=date('d F Y', strtotime($dt['tanggal_posting']))?></span>
									</div>
								</div>
							</div>
							<div class="news_post_text" style="text-align: justify; color: black;">
								<?=$dt['deskripsi']?>
							</div>
						</div>

					</div>
					

				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest Posts -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Latest posts</h3>
							</div>

							<div class="latest_posts">
								
								<?php  
								foreach ($kegiatan as $k) { ?>
									<!-- Latest Post -->
									<div class="latest_post">
										<div class="latest_post_image">
											<img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" alt="">
										</div>
										<div class="latest_post_title"><a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><?=$k['judul_kegiatan']?></a></div>
										<!-- <div class="latest_post_meta">
											<span class="latest_post_author"><a href="#">Pleh <?=$k['nama']?></a></span>
											<span>|</span>
											<span class="latest_post_comments"><a href="#"><?=$k['nama_lembaga']?></a></span>
										</div> -->
									</div>
								<?php } ?>

							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>