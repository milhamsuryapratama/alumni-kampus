<div class="blog">
	<div class="container">
		<div class="blog-head">
			<h2><?=$dt['judul_kegiatan']?></h2>
		</div>
		<div class="col-md-8 blog-left" >
			<div class="blog-info">
				<div class="blog-info-text">
					<div class="blog-img">
						<img src="<?=base_url()?>assets/foto/kegiatan/<?=$dt['foto_kegiatan']?>" alt=""/>
					</div>
					<!-- <h4><?=$dt['judul_kegiatan']?></h4> -->
					<span class="snglp" style="text-align: justify;"><?=$dt['deskripsi']?></span>

				</div>
				<div class="comment-icons">
					<ul>
						<li><span class="clndr"></span><?=date('d F Y', strtotime($dt['tanggal_posting']));?></li>
						<li><span class="admin"></span> <a href="#"><?=$dt['nama']?></a></li>
						<li><span></span>Lembaga : <a href="<?=base_url()?>kegiatan/lembaga/<?=$dt['id_lembaga_alumni']?>"><?=$dt['nama_lembaga']?></a> </li>
					</ul>
				</div>
				<div class="admin-text">
					<h5>Ditulis Oleh <?=$dt['nama']?></h5>
					<div class="admin-text-left">
						<a href="#"><img src="<?=base_url()?>assets/foto/alumni/<?=$dt['foto']?>" alt="" width="70"/></a>
					</div>
					<div class="admin-text-right">
						<p><strong>Alamat : </strong><?=$dt['alamat'] . ' Kecamatan '. $dt['nama_kecamatan'] . ' Desa ' . $dt['nama_desa']?></p>
						<!-- <span>View all posts by:<a href="#"> <?=$dt['nama']?> </a></span> -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
		<div class="col-md-4 single-page-right">				
			<div class="recent-posts">
				<h4>Recent posts</h4>
				<?php  
				foreach ($kegiatan as $k) { ?>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" width="150" height="175" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts-right">
							<label>MARCH 5, 2015</label>
							<h5><a href="single.html"><?=$k['judul_kegiatan']?></a></h5>
							<!-- <p><?=substr($k['deskripsi'],0,50)?></p> -->
							<a href="<?=base_url()?>kegiatan/detail/<?=$k['slug']?>" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				<?php } ?>				
				<div class="clearfix"> </div>
			</div>				
		</div>
	</div>
</div>

