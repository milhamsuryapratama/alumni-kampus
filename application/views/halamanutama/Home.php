<style type="text/css">
	.form-control-borderless {
		border: none;
	}

	.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
		border: none;
		outline: none;
		box-shadow: none;
	}
</style>
<!-- Popular -->
	<br>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h1>Pencarian</h1>
				</div>
			</div>
		</div>	
		<form method="GET" action="<?=base_url()?>pages/kegiatan">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<form class="card card-sm">
						<div class="card-body row no-gutters align-items-center">
							<div class="col-auto">
								<i class="fas fa-search h4 text-body"></i>
							</div>
							<!--end of col-->
							<div class="col">
								<input class="form-control form-control-lg form-control-borderless" name="s" type="search" placeholder="Search topics or keywords">
							</div>
							<!--end of col-->
							<div class="col-auto">
								<button class="btn btn-lg btn-success" type="submit" style="background-color: #42f46e">Search</button>
							</div>
							<!--end of col-->
						</div>
					</form>
				</div>
				<!--end of col-->
			</div>
		</form>
	</div>
	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Kegiatan Kami</h1>
					</div>
				</div>
			</div>			
			<div class="row course_boxes">

				<?php  
				foreach ($kegiatan as $k) { 
					if ($k['author'] == 0) {
						$ad = $this->db->query("SELECT * FROM administrator WHERE id = '1'")->row_array();
					} else {
						$adm = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$k[author]'");
						if ($adm->num_rows() > 0) {
							$ad = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$k[author]'")->row_array();
						} else {
							$ad = $this->db->query("SELECT * FROM anggota_fks WHERE nis = '$k[author]'")->row_array();
						}
					}
					?>
					<!-- Popular Course Item -->
					<div class="col-lg-4 course_box">
						<div class="card">
							<img class="card-img-top" src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" alt="">
							<div class="card-body text-center">
								<div class="card-title"><a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><?=$k['judul_kegiatan']?></a></div>
								<!-- <div class="card-text"><?=substr($k['deskripsi'],0,50)?></div> -->
							</div>
							<div class="price_box d-flex flex-row align-items-center">
								<div class="course_author_image">
									<?php if ($k['author'] == 0) { ?>
										<img src="<?=base_url()?>assets/foto/logo/logop4nj.png" alt="" width="50">
									<?php } else { 
											if ($adm->num_rows() > 0) { ?>
												<img src="<?=base_url()?>assets/foto/alumni/<?=$ad['foto']?>" alt="">
											<?php } else { ?>
												<img src="<?=base_url()?>assets/foto/logo/logofksj.png" alt="" width="45">
											<?php }
										?>
										
									<?php } ?>									
								</div>
								<div class="course_author_name">Oleh <?php if ($k['author'] == 0) {
									echo $ad['username'];
								} else { echo $ad['nama']; } ?>, <span>Pengurus <?=$k['nama_lembaga']?></span></div>
								<!-- <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>Baca</span></div> -->
							</div>
						</div>
					</div>
				<?php } ?>

				<div class="container" style="margin-top: 10px">
					<center><div class="button button_color_1 text-center trans_200" style="background-color: #42f46e"><a href="<?=base_url()?>pages/kegiatan">Lihat Lebih Banyak</a></div></center>
				</div>
			</div>
		</div>		
	</div>

	<!-- Events -->

	<div class="events page_section" style="margin: 0; padding: 0">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Promosi</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<?php  
				foreach ($promosi as $p) { ?>
					<div class="row event_item">
						<div class="col">
							<div class="row d-flex flex-row align-items-end">

								<div class="col-lg-2 order-lg-1 order-2">
									<div class="event_date d-flex flex-column align-items-center justify-content-center" style="border-color: #42f46e">
										<div class="event_day" style="color: #42f46e"><?=substr($p['tgl_mulai'],8,2)?></div>
										<div class="event_month" style="color: #42f46e"><?=date('F', strtotime($p['tgl_mulai']))?> <?=substr($p['tgl_mulai'],0,4)?></div>
									</div>
								</div>

								<div class="col-lg-6 order-lg-2 order-3">
									<div class="event_content">
										<div class="event_name"><a class="trans_200" href="#"><?=$p['nama_usaha']?></a></div>
										<div class="event_location">Milik <?=$p['nama']?></div>
										<p><?=$p['nama_usaha']?> adalah usaha milik <?=$p['nama']?> yang bergerak dibidang <?=$p['bidang_usaha']?>  </p>
									</div>
								</div>

								<div class="col-lg-4 order-lg-3 order-1">
									<div class="event_image">
										<img src="<?=base_url()?>assets/foto/foto_usaha/<?=$p['foto_usaha']?>" alt="">
									</div>
								</div>

							</div>	
						</div>
					</div>
				<?php } ?>

			</div>

			<div class="container" style="margin-top: 10px">
				<center><div class="button button_color_1 text-center trans_200" style="background-color: #42f46e"><a href="<?=base_url()?>pages/promosi" >Lihat Lebih Banyak</a></div></center>
			</div>
				
		</div>
	</div>
	<br>

	

