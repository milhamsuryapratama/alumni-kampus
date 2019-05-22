<!-- Events -->

	<div class="events page_section">
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
									<div class="event_date d-flex flex-column align-items-center justify-content-center" style="border-color: #004727">
										<div class="event_day" style="color: #004727"><?=substr($p['tgl_mulai'],8,2)?></div>
										<div class="event_month" style="color: #004727"><?=date('F', strtotime($p['tgl_mulai']))?> <?=substr($p['tgl_mulai'],0,4)?></div>
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

			<div class="news_page_nav">
				<?php echo $halaman; ?>
			</div>
				
		</div>
	</div>