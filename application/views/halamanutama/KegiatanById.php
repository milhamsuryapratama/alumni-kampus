<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-8">
					
					<div class="news_posts">
						<!-- News Post -->
						<?php  
						foreach ($kegiatan_id as $k) { 
							if ($k['author'] == 0) {
								$ad = $this->db->query("SELECT * FROM administrator WHERE id = '1'")->row_array();
							} else {
								$ad = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$k[author]'")->row_array();
							}
							?>

							<div class="news_post">
								<div class="news_post_image">
									<img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" alt="">
								</div>
								<div class="news_post_top d-flex flex-column flex-sm-row">
									<div class="news_post_date_container">
										<div class="news_post_date d-flex flex-column align-items-center justify-content-center" style="background-color: #42f46e">
											<div><?=substr($k['tanggal_posting'],8,2)?></div>
											<div><?=substr(date('F', strtotime($k['tanggal_posting'])),0 ,3)?></div>
										</div>
									</div>
									<div class="news_post_title_container">
										<div class="news_post_title">
											<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><?=$k['judul_kegiatan']?></a>
										</div>
										<div class="news_post_meta">
											<span class="news_post_author">Oleh 
												<?php 
													if ($k['author'] == 0) {
														echo $ad['username'];
													} else {
														echo $ad['nama'];
													}
												?>
											</span>
											<span>|</span>
											<span class="news_post_comments">Lembaga : <a href="<?=base_url()?>kegiatan/lembaga/<?=$k['id_lembaga_alumni']?>"><?=$k['nama_lembaga']?></a></span>
											<span>|</span>
											<span class="news_post_author">Pada <?=date('d F Y', strtotime($k['tanggal_posting']))?></span>
											<span>|</span>
										</div>
									</div>
								</div>
								<div class="news_post_text" style="text-align: justify;">
									<p><?=substr($k['deskripsi'],0,300). '. . .'?></p>
								</div>
								<div class="news_post_button text-center trans_200" style="background-color: #42f46e">
									<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>">Read More</a>
								</div>
							</div>
							

						<?php } ?>

					</div>

					<!-- Page Nav -->					

					<div class="news_page_nav">
						<?php echo $halaman; ?>
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