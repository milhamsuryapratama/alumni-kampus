<br>
<div class="news banner-grid">
	 <div class="container">
		 <h3>Promosi</h3>
		  <div class="event-grids">
		  <?php  
		  foreach ($promosi as $p) { 
		  	if (date('Y-m-d') > $p['tgl_akhir'] OR $p['status_promosi'] == 'N') {
		  		return;
		  	} else { ?>
		  		<div class="col-md-6 event-grid">
		  			<div class="date">
		  				<h4><?=substr($p['tgl_mulai'],8,2)?></h4>
		  				<span><?=substr($p['tgl_mulai'],5,2)?>/<?=substr($p['tgl_mulai'],0,4)?></span>
		  			</div>				
		  			<img src="<?=base_url()?>assets/foto/alumni/<?=$p['foto_usaha']?>" width="300"> 
		  			<div class="event-info">			     	
		  				<h5><a href="#">Nama Pemilik : <?=$p['nama']?></a></h5>
		  				<h5><a href="#">Bidang Usaha : <?=$p['bidang_usaha']?></a></h5>
		  				<h5><a href="#">ALamat : <?=$p['alamat'] . ' Kecamatan '. $p['nama_kecamatan'] . ' Desa ' . $p['nama_desa']?>	</a></h5>				
		  			</div>
		  			<div class="date">
		  				<h4><?=substr($p['tgl_akhir'],8,2)?></h4>
		  				<span><?=substr($p['tgl_mulai'],5,2)?>/<?=substr($p['tgl_mulai'],0,4)?></span>
		  			</div>	
		  			<div class="clearfix"></div>				 			 
		  		</div>
		  	<?php } ?>
		  	
		  <?php } ?>							 			 
			 </div>	
		 </div>
	 </div>
</div>
