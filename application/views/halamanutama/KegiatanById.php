<div class="blog">
	<div class="container">
		<div class="blog-head banner-grid">
			<h3>Kegiatan Kami</h3>
		</div>		
		<br>
		<div class="col-md-8 blog-left" >
			<?php  
			foreach ($kegiatan_id as $k) { ?>
				<div class="blog-info">
					<h3><a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><?=$k['judul_kegiatan']?></a></h3>
					<p>Ditulis Oleh <a href="#"><?=$k['nama']?></a> &nbsp;&nbsp; Lembaga : <a href="<?=base_url()?>kegiatan/lembaga/<?=$k['id_lembaga_alumni']?>"><?=$k['nama_lembaga']?></a> &nbsp;&nbsp; Pada <?=date('d F Y', strtotime($k['tanggal_posting']))?> &nbsp;&nbsp; </p>
					<div class="blog-info-text">
						<div class="blog-img">
							<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"> <img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<p class="snglp"><?=substr($k['deskripsi'],0,300)?></p>
						<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>	
				</div>
			<?php } ?>
		</div>	
		<div class="col-md-4 single-page-right">				
			<div class="recent-posts banner-grid">
				<h3>Recent posts</h3>
				<br>
				<?php  
				foreach ($kegiatan as $k) { ?>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"> <img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" width="150" height="175" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts-right">
							<label>MARCH 5, 2015</label>
							<h5><a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>"><?=$k['judul_kegiatan']?></a></h5>
							<!-- <p><?=substr($k['deskripsi'],0,50)?></p> -->
							<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				<?php } ?>				
				<div class="clearfix"> </div>
			</div>				
		</div>
		<div class="clearfix"> </div>
		<nav>
			<?php echo $halaman; ?>
		</nav>
	</div>	
</div>	
	<!--//blog-->