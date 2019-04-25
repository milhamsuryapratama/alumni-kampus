<div class="welcome">
	 <div class="container">
		 <h2>P4NJ (PEMBANTU PENGURUS PONDOK PESANTREN NURUL JADID)</h2>
		 <div class="welcm_sec">
			 <div class="col-md-9 campus">
				 <div class="campus_head">
					 <h3>Selamat Datang</h3>
					 <p style="text-align: justify;">Adalah wadah para alumni, wali santri, dan simpatisan yang bertujuan menjalin silaturahim untuk mendukung kegiatan pesantren.</p>
				 </div>
				 <?php 
				foreach ($kegiatan as $k) { ?>
					<div class="col-md-4 wel_grid">
						<img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" class="img-responsive" alt=""/>
						<span style="text-align: justify;"><h5><a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><?=$k['judul_kegiatan']?></a></h5></span>
						<!-- <p><?=substr($k['deskripsi'],0,100)?></p> -->
					</div>
					<!-- <div class="col-md-4 camp-grid">
						<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" class="img-responsive" alt=""/></a>
						<h4><a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><?=$k['judul_kegiatan']?></a></h4>
						<p><?=substr($k['deskripsi'],0,100)?></p>
						<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="more">[ Read More..]</a>
					</div> -->
				<?php } ?>
				<div class="clearfix"></div>
				<div class="more_info">
						<a href="<?=base_url()?>pages/kegiatan">Lihat Lebih Banyak....</a>
				 </div>
			 </div>

			 <div class="col-md-3 testimonal">
			 		<form method="GET" action="<?=base_url()?>pages/kegiatan">
			 			<input type="text" class="form-control" name="s" placeholder="Pencarian"> <button class="btn btn-primary">Cari</button>
			 		</form>
					<h3>Quotes</h3>
					<div class="testimnl-grid">
						 <a href="#"><p style="text-align: justify;">Berpandai-pandailah mencari hikmah, sehingga dalam keadaan apapun kita tidak pernah susah.</p></a>
						 <h5>KH. MOH. ZUHRI ZAINI</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p style="text-align: justify;">Saya tidak rela kalau santri saya tidak berjuang di masyarakan</p></a>
						 <h5>Alm. KH. ZAINI MUN`IM</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p style="text-align: justify;">Jadilah orang yang berguna tanpa harus menonjolkan diri.</p></a>
						 <h5>KH. MOH. HASYIM ZAINI</h5>
					</div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>


<!-- <div class="welcome">
	<div class="container">
		<h2>Duis aliquet in ex nec elementum. In commodo molestie libero ornare elementum.</h2>
		<div class="our_work">
			<h3>Our Campus</h3>
			<div class="blog-section">	
				<?php 
				foreach ($kegiatan as $k) { ?>
					<div class="col-md-4 camp-grid">
						<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" class="img-responsive" alt=""/></a>
						<h4><a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><?=$k['judul_kegiatan']?></a></h4>
						<p><?=substr($k['deskripsi'],0,100)?></p>
						<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="more">[ Read More..]</a>
					</div>
				<?php } ?>		
				<div class="col-md-3 testimonal">
					<h3>Testimonials</h3>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>John.Mr</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>John.Mr</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>John.Mr</h5>
					</div>
			 </div>
										
				<div class="clearfix"></div>				
			</div>
		</div>
	</div>
</div>

 -->