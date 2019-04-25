<div class="footer">
	 <div class="container">
		 <div class="ftr-sec">
			 <div class="col-md-4 ftr-grid">
				 <h3>Informasi</h3>
				 <p>OFFICE <br> KANTOR SEKRETARIAT <br> PONDOK PESANTREN NURUL JADID <br> PO. BOX 1 Paiton Probolinggo 67291 <br> 0888-307-7077 </p>
				 
			 </div>
			 <div class="col-md-4 ftr-grid2">
				 <h3>Pages</h3>
				 <ul>
					 <li class="active"><a href="<?=base_url()?>" ><span></span>Home</a></li>
					 <li><a href="<?=base_url()?>pages/visi_misi"><span></span>Visi Misi</a></li>
					 <li><a href="<?=base_url()?>pages/kegiatan"><span></span>Kegiatan</a></li>
					 <li><a href="<?=base_url()?>pages/promosi"><span></span>Promosi</a></li>
				 </ul>
			 </div>
			 <div class="col-md-4 ftr-grid3">
				 <h3>Link Terkait</h3>
				 <?php  
				 $lembaga_nj = $this->App_model->ambil_data('tb_lembaga_nj','id_lembaga');
				 ?>
				 <ul>
					 <?php foreach ($lembaga_nj as $l) { ?>
					 	<li><a href="<?=$l['situs']?>"><span></span><?=$l['nama_lembaga']?></a></li>
					 <?php } ?>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>Copyright © 2019 P4NJ JEMBER. All rights reserved | Design by <a href="<?=base_url()?>">P4NJ JEMBER</a></p>
	 </div>
</div>
<!---->
</body>
</html>