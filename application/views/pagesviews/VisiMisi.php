<section class="bg0 p-b-55">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-80">
				<div class="p-r-10 p-r-0-sr991">
					<div class="m-t--65 p-b-40">
						<!-- Item Blog -->
						<?php 
						if (count($vm) > 0) {
							foreach ($vm as $v) { ?>
								<div class="flex-col-s-c how-bor2 p-t-65 p-b-40">								

									<h5 class="p-b-17 txt-center">
										<a href="<?=base_url()?>kegiatan/lembaga/<?=$v['id_lembaga_alumni']?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											<?=$v['nama_lembaga']?>
										</a>
									</h5>
									
									<img src="<?=base_url()?>assets/foto/logo/<?=$v['logo']?>" width="100" alt="IMG">

									<p class="f1-s-11 cl6 txt-center p-b-22">
										<p style="font-size: 24px; font-weight: bold;">
											Visi
										</p>
										<?=$v['visi']?> 
									</p>

									<p class="f1-s-11 cl6 txt-center p-b-22">
										<p style="font-size: 24px; font-weight: bold;">
											Misi
										</p>
										<?=$v['misi']?>
									</p>

								<!-- <a href="blog-detail-01.html" class="f1-s-1 cl9 hov-cl10 trans-03">
									Read More
									<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
								</a> -->
							</div>
						<?php } 	
						} else {
							echo "Tidak Ada Data";
						} ?>
										

					</div>
				</div>
			</div>

		</div>
	</div>
</section>