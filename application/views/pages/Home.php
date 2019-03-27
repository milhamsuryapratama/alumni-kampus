		<br>

		<div class="container" id="visimisi">
			<div class="row">
				<center><h2>Visi & Misi</h2></center>
				<?php 
					foreach ($vm as $v) { ?>
						<div class="col-sm-4">
							<div class="about-text wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
								<h3><?=$v['nama_lembaga']?></h3>
								<br>
								<strong>Visi</strong>
								<p><?=$v['visi']?></p>
								<strong>Misi</strong>
								<p><?=$v['misi']?></p>
							</div>
						</div>
				<?php } ?>				
			</div>
		</div>

		<section class="blog-single" id="kegiatan">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Our <span>Activities</span></h3>
						</div>
					</div>
					<?php 
						foreach ($kegiatan as $k) { ?>							
							<div class="col-md-6">
								<div class="single-blog">
									<h3><?=$k['judul_kegiatan']?></h3>
									<img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" alt="Sider Big Image">
									<p>
										<?php echo substr($k['deskripsi'], 0, 300). " . . . . . . . ." ?>
									</p>
									<div class="blog-info">			

										<div class="read-more pull-right">
											<a href="<?=base_url()?>artikel/kegiatan/<?=$k['slug']?>" class="btn btn-readmore">Continue Reading</a>
										</div>

									</div>

								</div>
							</div>
						<?php } ?>
				</div>
			</div>
		</section>